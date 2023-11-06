<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function user() // 今回は投稿に紐づく投稿はひとつしかないので
    {
        return $this->belongsTo(User::class);
    }
}
