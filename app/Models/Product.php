<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property string $storey
 * @property string $design
 * @property string $description
 * @property string $image
 * @property string $lot_area
 * @property int $product_type_id
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $casts = [
		'product_type_id' => 'int'
	];

	protected $fillable = [
		'storey',
		'design',
		'description',
		'image',
		'lot_area',
		'product_type_id'
	];
}
