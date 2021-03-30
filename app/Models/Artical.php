<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    use HasFactory;

    protected $table='artical';

    protected $fillable=[
    	'title',
    	'category',
    	'description',
    	'image',
    	'video_link',
    	'post_date',
    	'post_time',
    	'status'
    ];
}
