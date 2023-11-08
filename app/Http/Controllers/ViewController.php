<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cars;
use App\Models\Blog;
use App\Models\Baggage;
use App\Models\SearchForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Requests\Car\CarStoreRequest;
use App\Http\Requests\Car\CarUpdateRequest;
use App\Http\Requests\SearchForm\SearchFormStoreRequest;
use App\Http\Requests\Baggage\BaggageStoreRequest;
use Session;
use Stripe;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }

     public function baggage(){
        return view('baggage');
    }

    public function airports(){
        return view('airports');
    }

    public function bloggrid(){
        $blogs = Blog::all();
        return view('blog-grid', compact('blogs'));
    }

    public function blogdetails($id){
    $blog = Blog::find($id); // Assuming your Blog model has a 'find' method
    return view('blog-details', compact('blog'));
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
    $trip = $searches->first()->one_way;

    // Calculate prices based on the latest distance
    $carPrices = $this->calculatePrices();



    return view('find', compact('cars', 'carPrices', 'searches', 'latestDistance','trip'));
}

public function baggagefind()
{
    // Assuming Cars is your Eloquent model and has a relationship with categories
    $cars = Cars::with('categories')->get();

    // Fetch all records from the SearchForm table and get the distance of the latest record
    $baggages = Baggage::latest()->get();
    $latestDistance = $baggages->first()->distance;
    

    // Calculate prices based on the latest distance
    $carPrices = $this->calculatePrices();



    return view('baggage_find', compact('cars', 'carPrices', 'baggages', 'latestDistance'));
}


   public function book($id){
    $cars = Cars::with('categories')->where('id', $id)->get();
    $searches = Baggage::latest()->get();
    $search = Baggage::all();
    $latestDistance = $searches->first()->distance;
    $carPrices = $this->calculatePrices();

    return view('book', compact('cars', 'searches', 'latestDistance', 'carPrices','search'));
}

 public function baggagebook($id){
    $cars = Cars::with('categories')->where('id', $id)->get();
    $baggages = Baggage::latest()->get();
    $baggage = Baggage::all();
    $latestDistance = $baggages->first()->distance;
    $carPrices = $this->calculatePrices();

    return view('baggage_book', compact('cars', 'baggages', 'latestDistance', 'carPrices','baggage'));
}



    public function confirmbooking($id){
    $cars = Cars::with('categories')->where('id', $id)->get();
    $searches = SearchForm::latest()->get();
    $search = SearchForm::all();
    $latestDistance = $searches->first()->distance;
    $carPrices = $this->calculatePrices();
        return view('confirmbooking',compact('cars', 'searches', 'latestDistance', 'carPrices','search'));
    }

    public function baggageconfirmbooking($id){
    $cars = Cars::with('categories')->where('id', $id)->get();
    $baggages = Baggage::latest()->get();
    $baggage = Baggage::all();
    $latestDistance = $baggages->first()->distance;
    $carPrices = $this->calculatePrices();
        return view('baggage_cnfirmbooking',compact('cars', 'baggages', 'latestDistance', 'carPrices','baggage'));
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
    $search->pickup_date = $request->pickup_date;
    
    $search->pickup_time = $request->pickup_time;
    $search->one_way = $request->one_way;
    
    $search->luggage = $request->luggage;
    $search->distance = $request->distance;
    $search->passengers = $request->passengers;



    $search->save();

    return redirect()->route('find')->with('success', 'Booking Searched successfully.');
}

 public function searchbookings(SearchFormStoreRequest $request)
{
    // Retrieve the user ID of the logged-in user
    $userId = auth()->id();

    $input = $request->all();
    $search = new SearchForm;
    
    // Associate the user ID with the search
    $search->users_id = $userId;

    $search->pickup_destination = $request->pickup_destination;
    $search->dropoff_destination = $request->dropoff_destination;
    $search->return_pickup_destination = $request->return_pickup_destination;
    $search->return_dropoff_destination = $request->return_dropoff_destination;
    $search->pickup_date = $request->pickup_date;
    $search->return_date = $request->pickup_date;
    $search->pickup_time = $request->pickup_time;
    $search->return_time = $request->return_time;
    $search->luggage = $request->luggage;
    $search->distance = $request->distance;
   $search->passengers = $request->passengers;
    $search->one_way = $request->one_way;
    

    $search->save();

    return redirect()->route('find')->with('success', 'Booking Searched successfully.');
}

 public function baggagepost(BaggageStoreRequest $request)
{
    // Retrieve the user ID of the logged-in user
    $userId = auth()->id();

    $input = $request->all();
    $baggage = new Baggage;
    
    // Associate the user ID with the search
    $baggage->users_id = $userId;

    $baggage->pickup_destination = $request->pickup_destination;
    $baggage->dropoff_destination = $request->dropoff_destination;
    $baggage->length = $request->length;
    $baggage->width = $request->width;
    $baggage->weight = $request->weight;
    $baggage->height = $request->height;
    $baggage->distance = $request->distance;

    $baggage->save();

    return redirect()->route('baggagefind')->with('success', 'Booking Searched successfully.');
}




public function calculatePrices()
{
    // Assuming Cars is your Eloquent model
    $cars = Cars::all(['id', 'categories_id', 'first_mile_price', 'after_first_mile_price']);

    // Assuming SearchForm is a single record, adjust accordingly if it's multiple records
    $search = SearchForm::latest()->first(['distance']);

    // Get the distance from the latest search form record
    $distance = (float)str_replace(' mi', '', $search->distance);

    // Initialize an array to store individual costs for each car
    $carPrices = [];

    // Calculate cost for each car based on its own first mile price and multiplier
    foreach ($cars as $car) {
        $carCost = $car['first_mile_price'] + ($distance * $car['after_first_mile_price']);
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

    // Retrieve the user ID of the logged-in user
    $userId = auth()->id();

    // Retrieve the car price from the request
    $carPrice = $request->input('car_price');

    // Convert the car price to pence (assuming the currency is in pence)
    $amountInPence = round($carPrice * 100); // Convert to pence and round properly

    // Assuming you have logic to determine the car ID here
    $carId = $request->input('car_id'); // Adjust this based on your implementation

    // Find the existing SearchForm record for the user
    $searchForm = SearchForm::where('users_id', $userId)->latest()->first();

    // Update the existing record with the car price
    $searchForm->car_price = $carPrice;
    $searchForm->car_id = $carId;

    // Save the changes
    $searchForm->save();

     $baggage = Baggage::where('users_id', $userId)->latest()->first();

    // Update the existing record with the car price
    $baggage->car_price = $carPrice;
    $baggage->car_id = $carId;

    // Save the changes
    $baggage->save();

    // User is logged in, proceed with the payment
    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    try {
        \Stripe\Charge::create([
            "amount" => $amountInPence,
            "currency" => "PEN",
            "source" => $request->stripeToken,
            "description" => "Payment",
        ]);

        // Payment successful, set success flash message
        \Session::flash('success', 'Payment Successful!');
    } catch (\Exception $e) {
        // Payment failed, set error flash message
        \Session::flash('error', 'Payment failed: ' . $e->getMessage());
    }

    return redirect()->route('index');
}



}
