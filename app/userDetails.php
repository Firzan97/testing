<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userDetails extends Model
{
   // protected $guarded = []; or you can use
	
	protected $fillable = [
     'name',
     'phoneNum',
     'email',
     'birthdate',
     'age',
     'occupation',
     'gender',
     'address',
     'postcode',
     'city',
     'state',

	];

	
}