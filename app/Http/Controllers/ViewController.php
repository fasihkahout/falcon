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
use Session;
use Stripe;

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

    public function find()
{
    // Assuming Cars is your Eloquent model and has a relationship with categories
    $cars = Cars::with('categories')->get();

    // Fetch all records from the SearchForm table and get the distance of the latest record
    $searches = SearchForm::latest()->get();
    $latestDistance = $searches->first()->distance;

    // Calculate prices based on the latest distance
    $carPrices = $this->calculatePrices();



    return view('find', compact('cars', 'carPrices', 'searches', 'latestDistance'));
}


   public function book($id){
    $cars = Cars::with('categories')->where('id', $id)->get();
    $searches = SearchForm::latest()->get();
    $search = SearchForm::all();
    $latestDistance = $searches->first()->distance;
    $carPrices = $this->calculatePrices();

    return view('book', compact('cars', 'searches', 'latestDistance', 'carPrices','search'));
}



    public function confirmbooking($id){
    $cars = Cars::with('categories')->where('id', $id)->get();
    $searches = SearchForm::latest()->get();
    $search = SearchForm::all();
    $latestDistance = $searches->first()->distance;
    $carPrices = $this->calculatePrices();
        return view('confirmbooking',compact('cars', 'searches', 'latestDistance', 'carPrices','search'));
    }

    public function searchBooking(SearchFormStoreRequest $request)
{
    // Retrieve the user ID of the logged-in user
    $userId = auth()->id();

    $input = $request->all();
    $search = new SearchForm;
    
    // Associate the user ID with the search
    $search->users_id = $userId;

    $search->pickup_destination = $request->pickup_destination;
    $search->dropoff_destination = $request->dropoff_destination;
    $search->flight_arrival_time = $request->flight_arrival_time;
    $search->pickup_date = $request->pickup_date;
    $search->pickup_time = $request->pickup_time;
    $search->luggage = $request->luggage;
    $search->distance = $request->distance;
    $search->adults = $request->adults;

    $search->save();

    return redirect()->route('find')->with('success', 'Booking Searched successfully.');
}



public function calculatePrices()
{
    // Assuming Cars is your Eloquent model

    // Fetch id, categories_id, and first_mile_price columns for all cars
    $cars = Cars::all(['id', 'categories_id', 'first_mile_price']);

    // Assuming SearchForm is a single record, adjust accordingly if it's multiple records
    $search = SearchForm::latest()->first(['distance']);

    // Get the distance from the latest search form record
    $distance = (float)str_replace(' mi', '', $search->distance);

    // Initialize an array to store individual costs for each car
    $carPrices = [];

    // Loop through each car
    foreach ($cars as $car) {
        // Determine the multiplier based on categories_id
        switch ($car['categories_id']) {
            case 6: // Basic
                $multiplier = 1.59;
                break;
            case 7: // Salon
                $multiplier = 1.79;
                break;
            case 8: // 6 Seater
                $multiplier = 2.19;
                break;
            default:
                // Handle other categories if needed
                $multiplier = 1.59;
        }

        // Calculate cost for each car based on its own first mile price and multiplier
        $carCost = $car['first_mile_price'] + ($distance * $multiplier);
        $carPrices[$car['id']] = $carCost;
    }

    return $carPrices;
  }

  public function stripePost(Request $request)
{
    // Check if the user is logged in
    if (!auth()->check()) {
        // User is not logged in, redirect to the login page
        return redirect()->route('login')->with('error', 'Please log in to complete the payment.');
    }

    // User is logged in, proceed with the payment
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    Stripe\Charge::create([
        "amount" => 100 * 100,
        "currency" => "PEN",
        "source" => $request->stripeToken,
        "description" => "Payment",
    ]);

    Session::flash('success', 'Payment Successful!');

    return redirect()->route('index')->with('success', 'Payment Successful!');
}


}
