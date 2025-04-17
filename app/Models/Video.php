<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = ['id', 'title' , 'thumbnail_url', 'duration', 'uploadTime', 'views', 'author', 'videoUrl', 'description', 'subscriber', 'isLive']; 
}
