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
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
     use ImageuploadTriat;


    public function dashboard(){
    // Check if there is an authenticated user
    if(auth()->user()){
        $userId = auth()->user()->id;
        $bookings = SearchForm::where('users_id', $userId)->get();
        $query  = SearchForm::with('users','cars')->whereNotNull('users_id')->orderBy('id','DESC');
        $totalbookings=$query->count();
        $query =  User::role('User');
        $totalusers=$query->count();
        $query =  Cars::with('categories');
        $totalcars=$query->count();
        $query = Category::all();
        $totalcategories=$query->count();
        return view('admin.dashboard', compact('bookings','totalbookings','totalusers','totalcars','totalcategories'));
    } else {
        // Handle the case where there is no authenticated user (redirect, show an error, etc.)
        // For example, you might want to redirect the user to the login page:
        return redirect()->route('login');
    }
}


   public function bookings() {
    // Check if the user is logged in
    if(auth()->check()) {
        // If logged in, check if the user has the 'Admin' role
        if (auth()->user()->hasRole('Admin')) {
            // If admin, retrieve all bookings
            $bookings = SearchForm::with('users','cars')->whereNotNull('users_id')->orderBy('id','DESC')
    ->get();
        } else {
            // If user, retrieve only bookings associated with the user
            $userId = auth()->user()->id;
            $bookings = SearchForm::with('users','cars')->where('users_id', $userId)->orderBy('id','DESC')->get();
        }

        return view('admin.bookings', compact('bookings'));
    } else {
        // If not logged in, redirect to login page
        return redirect()->route('login')->with('error', 'Please sign in first.');
    }
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

     public function addusers(){
       
        return view('admin.add_user');
    }

     public function postusers(UserStorerequest $request)
    {

        $input = $request->all();
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        if ($request->has('password'))
         {
        $user->password=Hash::make($request->password);
     }
     
        $user->save();
        $user=$user->assignRole('User');
        return redirect()->route('users')->with('success', 'User Added successfully.');
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
        $car->seats=$request->seats;
        $car->ac=$request->ac;
        $car->first_mile_price=$request->first_mile_price;
        $car->after_first_mile_price=$request->after_first_mile_price;

       
        
        $car->save();
        return redirect()->route('cars')->with('success', 'Car Added successfully.');
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

    public function editusers($id)
    {

        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users')->with('error', 'User not found.');
        }

        return view('admin.edit_user', compact('user'));
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
        $car->seats=$request->seats;
        $car->ac=$request->ac;
        $car->first_mile_price=$request->first_mile_price;
        $car->after_first_mile_price=$request->after_first_mile_price;

        $car->save();
        return redirect()->route('cars')->with('success', 'Car updated successfully.');
            
    }

    public function updateusers(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
      $user->name=$request->name;
        $user->email=$request->email;
        if ($request->has('password'))
         {
        $user->password=Hash::make($request->password);
     }
        $user->save();
        return redirect()->route('users')->with('success', 'User updated successfully.');
            
    }

    
public function deleteusers($id)
    {
        $user = User::find($id);
        
        if (!$user) {
            return redirect()->route('users')->with('error', 'User not found.');
        }

        $user->delete();

        return redirect()->route('users')->with('success', 'User deleted successfully!');
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
        $category->bag_capacities = $request->input('bag_capacities');

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
        $category->bag_capacities = $request->input('bag_capacities');

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
