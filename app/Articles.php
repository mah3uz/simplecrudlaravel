<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    // Model for Articles
	protected $fillable = [
		'title',
		'body',
	];
}
