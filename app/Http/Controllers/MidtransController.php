<?php

namespace App\Http\Controllers;

use App\Models\Midtrans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MidtransController extends Controller
{
    public function create(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'total_amount' => 'required|numeric',
            'item_name' => 'required|string',
            'cash_delivery' => 'nullable|string', // Sesuaikan validasi jika diperlukan
        ]);

        $order_id = Str::uuid();
        
        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $request->total_amount,
            ],
            'item_details' => [
                [
                    'price' => $request->total_amount,
                    'quantity' => 1,
                    'name' => $request->item_name,
                ]
            ],
            'customer_details' => [
                'first_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ],
            'enabled_payments' => ['bca_va', 'credit_card', 'bri_va']
        ];

        // Authorization header menggunakan base64 encoding dari server key Midtrans
        $authKey = base64_encode(env('MIDTRANS_SERVER_KEY') . ':');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $authKey,
        ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', $params);

        $responseBody = json_decode($response->body());

        // Simpan data pembayaran ke database
        $payment = new Midtrans();
        $payment->name = $request->name;
        $payment->email = $request->email;
        $payment->phone = $request->phone;
        $payment->address = $request->address;
        $payment->total_amount = $request->total_amount;
        $payment->payment_type = $request->cash_delivery; // Asumsi ini adalah metode pembayaran yang dipilih pengguna
        $payment->invoice_no = $order_id;
        $payment->order_date = now()->format('Y-m-d');
        $payment->order_month = now()->format('m');
        $payment->order_year = now()->format('Y');
        $payment->status = 'pending';
        $payment->save();

        return response()->json($responseBody);
    }
}
