<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {
	protected $table = 'addreses';
	protected $fillable = ['country'];
	//
	public function user() {
		return $this->belongsTo ( User::class );
	}
}
