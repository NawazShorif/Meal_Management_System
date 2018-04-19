<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userbuzzermodel extends Model
{
    protected $table="buzzertable";
    protected $primaryKey="id";
    protected $fillable=[
    'userid',
    'item',
    'price'
    ];
}
