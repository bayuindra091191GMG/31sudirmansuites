<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 06 Apr 2019 12:57:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Blog
 * 
 * @property int $id
 * @property string $title
 * @property string $alias
 * @property string $img_path
 * @property string $description
 * @property int $category_id
 * @property int $read_count
 * @property int $status_id
 * @property \Carbon\Carbon $created_at
 * @property int $created_by
 * @property \Carbon\Carbon $updated_at
 * @property int $updated_by
 * 
 * @property \App\Models\Category $category
 * @property \App\Models\AdminUser $admin_user
 * @property \App\Models\Status $status
 *
 * @package App\Models
 */
class Blog extends Eloquent
{
	protected $casts = [
		'category_id' => 'int',
		'read_count' => 'int',
		'status_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'title',
		'alias',
		'img_path',
		'description',
		'category_id',
		'read_count',
		'status_id',
		'created_by',
		'updated_by'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function createdBy()
	{
		return $this->belongsTo(\App\Models\AdminUser::class, 'created_by');
	}

    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\AdminUser::class, 'updated_by');
    }

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class);
	}
}
