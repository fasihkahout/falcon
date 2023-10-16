<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cars;
use App\Models\SearchForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Requests\Car\CarStoreRequest;
use App\Http\Requests\Car\CarUpdateRequest;
use App\Http\Requests\SearchForm\SearchFormStoreRequest;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }

    public function airports(){
        return view('airports');
    }

    public function bloggrid(){
        return view('blog-grid');
    }

    public function blogdetails(){
        return view('blog-details');
    }

    public function blogclassic(){
        return view('blog-classic');
    }

    public function find($prices){
        $cars = Cars::with('categories')->get();
        return view('find', compact('cars','prices'));
    }

    public function book(){
        return view('book');
    }

    public function confirmbooking(){
        return view('confirmbooking');
    }

    public function searchBooking(SearchFormStoreRequest $request)
    {

        $input = $request->all();
        $search = new SearchForm;
        $search->pickup_destination = $request->pickup_destination;
        $search->dropoff_destination=$request->dropoff_destination;
        $search->flight_arrival_time=$request->flight_arrival_time;
        $search->pickup_date=$request->pickup_date;
        $search->pickup_time=$request->pickup_time;
        $search->luggage=$request->luggage;
        $search->distance=$request->distance;
        
        
        $search->save();
        return redirect()->route('find')->with('success', 'Booking Searched successfully.');
    }

    public function price(){
    $cars = Cars::pluck('first_mile_price');
    $search = SearchForm::pluck('distance');

    // Assuming 'first_mile_price' is the column name in the Cars model
    $firstMilePrice = $cars->first();

    // Assuming 'distance' is the column name in the SearchForm model
    $distance = $search->first();

    // Calculate total cost
    $totalCost = $firstMilePrice + ($distance * 1.59);

    // Assign the calculated price to $prices
    $prices = $totalCost;

    // Call the 'find' method and pass the calculated prices
    return $this->find($prices);
}



}
