<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 03:27:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Subscribe
 * 
 * @property int $id
 * @property string $email
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class Subscribe extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'email'
	];
}
