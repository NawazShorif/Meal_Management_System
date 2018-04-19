<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertotalviewmodel extends Model
{
	 protected $table="totalview";
    protected $primaryKey="id";
    protected $fillable=[
    'username',
    'meal',
    'giventk',
    'availabletk'
    ];
}
