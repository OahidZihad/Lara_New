<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class firstInfo extends Model
{
    //
    public $timestamps = false;


    protected $fillable = ['theme_color', 'btn_color'];
}
