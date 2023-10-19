<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cars;
use App\Models\SearchForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Triats\ImageuploadTriat;
use App\Http\Requests\Car\CarStoreRequest;
use App\Http\Requests\Car\CarUpdateRequest;
use App\Http\Requests\SearchForm\SearchFormStoreRequest;
use App\Models\User;

class AdminController extends Controller
{
     use ImageuploadTriat;


    public function dashboard(){
        return view('admin.dashboard');
    }

    public function cars(){
        $cars = Cars::with('categories')->get();
        return view('admin.cars', compact('cars'));
    }

    public function users(){
        $users = User::role('User')->get();
        return view('admin.user', compact('users'));
    }

    public function addcars(){
        $categories = Category::all();
        return view('admin.add_cars', compact('categories'));
    }

    public function postcars(CarStoreRequest $request)
    {

        $input = $request->all();
        if ($request->has('img'))
        {
            // echo 1; exit;
            $img = $this->uploadImg($request);
        }
        $car = new Cars;
        $car->categories_id = $request->categories_id;
        $car->name=$request->name;
        $car->img=$img;
        $car->model=$request->model;
        $car->type=$request->type;
        $car->seats=$request->seats;
        $car->description=$request->description;
        $car->des=$request->des;
        $car->ac=$request->ac;
        $car->first_mile_price=$request->first_mile_price;
         $car->driver_cab_details=$request->driver_cab_details;
          $car->inclusion =$request->inclusion;
        $car->exclusion =$request->exclusion;
           $car->safety_guidelines=$request->safety_guidelines;

       
        
        $car->save();
        return redirect()->route('cars')->with('success', 'Car updated successfully.');
    }

    public function editcars($id)
    {

        $categories = Category::all();
        $car = Cars::find($id);

        if (!$car) {
            return redirect()->route('cars')->with('error', 'Car not found.');
        }

        return view('admin.edit_cars', compact('car','categories'));
    }

     public function updatecars(CarUpdateRequest $request, $id)
    {
        $car = Cars::find($id);
        if ($request->has('img'))
        {
            // echo 1; exit;
            $img = $this->uploadImg($request);
            $car->img=$img;
        }
        
       $car->categories_id = $request->categories_id;
        $car->name=$request->name;
        $car->model=$request->model;
        $car->type=$request->type;
        $car->seats=$request->seats;
        $car->ac=$request->ac;
        $car->description=$request->description;
        $car->des=$request->des;
        $car->first_mile_price=$request->first_mile_price;
        $car->driver_cab_details=$request->driver_cab_details;
        $car->inclusion =$request->inclusion;
        $car->exclusion =$request->exclusion;
        $car->safety_guidelines=$request->safety_guidelines;
       
        
        $car->save();
        return redirect()->route('cars')->with('success', 'Car updated successfully.');
            
    }

    

    public function deletecars($id)
    {
        $car = Cars::find($id);
        
        if (!$car) {
            return redirect()->route('cars')->with('error', 'Car not found.');
        }

        $car->delete();

        return redirect()->route('cars')->with('success', 'Car deleted successfully!');
    }


    public function categories() {
        $categories = Category::all();
        return view('admin.categories', ['categories' => $categories]);
    }



    public function postcategories(Request $request)
    {
        $category = new Category;
        $category->car_categories = $request->input('car_categories');

        $category->save();
        return redirect()->back();
    }

    public function editcategories($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('categories')->with('error', 'Car Category not found.');
        }

        return view('admin.edit_categories', compact('category'));
    }

     public function updatecategories(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('categories')->with('error', 'Car Category not found.');
        }

        $category->car_categories = $request->input('car_categories');

        $category->save();

        return redirect()->route('categories')->with('message', 'Car Category updated successfully!');
    }

     public function deletecategories($id)
    {
        $category = Category::find($id);
        
        if (!$category) {
            return redirect()->route('categories')->with('error', 'Car Category not found.');
        }

        $category->delete();

        return redirect()->back()->with('message', 'Car Category deleted successfully!');
    }

     public function googlemap(){
        $categories = Category::all();
        $cars = Cars::with('categories')->get();
        return view('admin.google_map',compact('categories','cars'));
    }

     


}
