<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchaser;
use App\Models\Product;
use App\Models\purchaser_product;
use Carbon\Carbon;

class ApiController extends Controller
{
    
	public function createPurchaser(Request $request) {
    $purchaser = new Purchaser;
    $purchaser->name = $request->name;
    $purchaser->save();
    return $purchaser;
    }
    public function createProduct(Request $request) {
    $product = new Product;
    $product->name = $request->name;
    $product->save();
    return $product;
    }


    public function getAllPurchaser() {
      $purchasers = Purchaser::get()->toJson(JSON_PRETTY_PRINT);
    return response($purchasers, 200);
    }

    public function getAllProduct() {
      $Products = Product::get()->toJson(JSON_PRETTY_PRINT);
    return response($Products, 200);
    }

    public function purchaserProduct(Request $request) {
    

    $purchaserproduct = new purchaser_product;
    $purchaserproduct->purchaser_id = $request->purchaser_id;
    $purchaserproduct->products_id  = $request->products_id ;
    $purchaserproduct->created_at= Carbon::create(2012, 1, 31, 0);
    $purchaserproduct->save();
    }

    
    public function PurchaserAllProduct($id) {

        return purchaser_product::where("purchaser_id",$id)->get();
    }
}
