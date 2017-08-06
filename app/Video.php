<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['user_id', 'descricao','video'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
