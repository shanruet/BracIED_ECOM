<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\UserProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

            $role = $user->role;
            if ($role =="admin"){
                return view('admin.dashboard');
            }else{
              
                return view('welcome');
            }

        
    }
   
    public function users()
    {
        $users = User::all();
        return view('admin.view_users',compact('users'));
    }
    public function cart()
    {
        // $users = User::all();
        return view('view_cart');
    }
     
    

}
