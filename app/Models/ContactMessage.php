<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 11 Apr 2019 04:14:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContactMessage
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $phone
 * @property string $address
 * @property string $message
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class ContactMessage extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'email',
		'subject',
		'phone',
		'address',
		'message',
        'created_at'
	];
}
