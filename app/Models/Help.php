<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
	protected $fillable = [
        'user_id', 'first_name', 'last_name', 'mobile', 'email', 'subject', 'message'
    ];
}
