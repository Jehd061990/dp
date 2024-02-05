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
 * @property string $lot_area
 * @property string|null $3d_image
 * @property string|null $floor_plan_image
 * @property string|null $interior_image
 * @property string $title
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $fillable = [
		'storey',
		'design',
		'description',
		'lot_area',
		'3d_image',
		'floor_plan_image',
		'interior_image',
		'title'
	];
}
