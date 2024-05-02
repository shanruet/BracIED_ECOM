<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\UserProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function products()
    {
        
        $products = Products::all();
        return view('admin.view_products',compact('products'));
    }
    public function viewproductsdetails($id)
    {
        
        $details = UserProduct::select('user_product.*','users.name')
        ->join('users', 'users.id', '=', 'user_product.user_id')
        ->where('product_id', $id)->get();
        $sale_count= UserProduct::select('user_product.*','users.name')
        ->join('users', 'users.id', '=', 'user_product.user_id')
        ->where('product_id', $id)->count();
        return view('admin.view_products_details',compact('details','sale_count'));
    }
}
