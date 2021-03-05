<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'tags',
        'description',
        'create_menu',
        'publish',
        'menu_name',
        'user_id'

    ];
}
