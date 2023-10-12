<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function cars(){
        $categories = Category::all();
        return view('admin.cars', ['categories' => $categories]);
    }

    public function categories() {
        $categories = Category::all();
        return view('admin.categories', ['categories' => $categories]);
    }

    public function postcategories(Request $request)
    {
        $categories = new Category;
        $categories->car_categories = $request->input('car_categories');

        $categories->save();
        return redirect()->back();
    }


}
