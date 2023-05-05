<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model 
{
public $timestamps = false; 
  
protected $primaryKey = 'username';  
  
protected $table = 'tbluser'; 
  
protected $fillable = [ 
    'username', 'password' 
]; 
}