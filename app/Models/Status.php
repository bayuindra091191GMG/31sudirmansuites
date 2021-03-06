<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 06 Apr 2019 12:57:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Status
 * 
 * @property int $id
 * @property string $description
 * 
 * @property \Illuminate\Database\Eloquent\Collection $admin_users
 * @property \Illuminate\Database\Eloquent\Collection $blogs
 *
 * @package App\Models
 */
class Status extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'description'
	];

	public function admin_users()
	{
		return $this->hasMany(\App\Models\AdminUser::class);
	}

	public function blogs()
	{
		return $this->hasMany(\App\Models\Blog::class);
	}
}
