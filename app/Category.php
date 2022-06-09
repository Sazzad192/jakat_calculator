<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'cat_id';
    protected $fillable = [
        'cat_id','cat_type','cat_name','cat_name_bn','cat_slug','cat_title','img_icon_path'
    ];
}