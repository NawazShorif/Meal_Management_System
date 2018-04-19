<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usermealmodel extends Model
{
    protected $table="mealtable";
    protected $primaryKey="id";
    protected $fillable=[
    'userid',
    'lunch',
    'diner'
    ];
}
