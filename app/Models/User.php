<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $email
 * @property string $password
 * @property string $account_type
 * @property string $first_name
 * @property string $last_name
 * 
 * @property Collection|Cart[] $carts
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email',
		'password',
		'account_type',
		'first_name',
		'last_name'
	];

	public function carts()
	{
		return $this->hasMany(Cart::class);
	}
}
