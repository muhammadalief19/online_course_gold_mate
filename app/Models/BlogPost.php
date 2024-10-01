<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function blog(){
        return $this->belongsTo(BlogCategory::class, 'blogcat_id' ,'id');
    }

    // public function user() {
    //     return $this->hasMany(User::class, 'blogcat_id');
    // }

    // In App\Models\BlogPost.php
    // public function category() {
    //     return $this->belongsTo(BlogCategory::class, 'blogcat_id');
    // }

}
