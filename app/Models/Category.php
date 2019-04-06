<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 06 Apr 2019 12:57:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $blogs
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function blogs()
	{
		return $this->hasMany(\App\Models\Blog::class);
	}
}
