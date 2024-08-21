<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SmtpSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // // Memastikan skema URL HTTPS jika dalam lingkungan lokal
        // if (config('app.env') === 'local') {
        //     URL::forceScheme('https');
        // }

        // Memeriksa apakah tabel 'smtp_settings' ada
        if (Schema::hasTable('smtp_settings')) {
            $smtpSetting = SmtpSetting::first();

            if ($smtpSetting) {
                $mailConfig = [
                    'driver' => $smtpSetting->mailer,
                    'host' => $smtpSetting->host,
                    'port' => $smtpSetting->port,
                    'username' => $smtpSetting->username,
                    'password' => $smtpSetting->password,
                    'encryption' => $smtpSetting->encryption,
                    'from' => [
                        'address' => $smtpSetting->from_address,
                        'name' => 'Easycourselms'
                    ]
                ];

                // Mengatur konfigurasi mail secara dinamis
                Config::set('mail', $mailConfig);
            }
        }
    }
}
