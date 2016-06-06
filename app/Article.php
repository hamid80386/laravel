<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = [
		'title',
		'body',
		'published_at'
	];

	/**
	 * An article is own by a user
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
	    return $this->belongsTo('App\User');
	}
}
