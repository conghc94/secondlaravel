<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Document extends Model
{
	protected $table = 'documents';

	public function category()
	{
		return $this->belongsTo('App\Category','foreign_key');
	}
}
