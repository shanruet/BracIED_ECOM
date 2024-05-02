<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\UserProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function productcategory()
    {
        
        $category = ProductCategory::select('*')->orderByDesc('category_id')->get();
        return view('admin.view_product_category',compact('category'));
    }
}
