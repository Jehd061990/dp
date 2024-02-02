<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductType
 * 
 * @property int $product_type_id
 * @property string $product_name
 * @property string $1_storey_price
 * @property string $2_storey_price
 * @property string $3_storey_price
 *
 * @package App\Models
 */
class ProductType extends Model
{
	protected $table = 'product_types';
	protected $primaryKey = 'product_type_id';
	public $timestamps = false;

	protected $fillable = [
		'product_name',
		'1_storey_price',
		'2_storey_price',
		'3_storey_price'
	];
}
