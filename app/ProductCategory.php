<?php namespace PrimeShop;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model {

	protected $table='productcategories';

     public function subCategory()
     {
     return $this->hasMany('PrimeShop\subCategory','categoryID');
     }

}
