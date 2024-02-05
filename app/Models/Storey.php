<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Storey
 * 
 * @property int $storey_id
 * @property string $storey_name
 * @property string $storey_price
 * @property string $flr_type
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Storey extends Model
{
	protected $table = 'storey';
	protected $primaryKey = 'storey_id';
	public $timestamps = false;

	protected $fillable = [
		'storey_name',
		'storey_price',
		'flr_type'
	];

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
