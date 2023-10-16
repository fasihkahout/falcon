<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cars;
use App\Models\SearchForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Validator;
use App\Triats\ImageuploadTriat;
use App\Http\Requests\Car\CarStoreRequest;
use App\Http\Requests\Car\CarUpdateRequest;

class UserController extends Controller
{
    use ImageuploadTriat;


   public function searchBooking(Request $request)
{
    try {
        // Validation rules (adjust as needed)
        $validator = Validator::make($request->all(), [
            'pickup_destination' => 'required',
            'dropoff_destination' => 'required',
            'flight_arrival_time' => 'required',
            'pickup_date' => 'required',
            'luggage' => 'required',
            'adults' => 'required',
            'childrens' => 'required',
            'infants' => 'required',
        ]);

        // Check validation results
        if ($validator->fails()) {
            return response()->json(['isSuccessful' => false, 'message' => $validator->errors()], 400);
        }

        // Create a new SearchForm instance
        $searchForm = new SearchForm();

        // Set properties
        $searchForm->pickup_destination = $request->input('pickup_destination');
        $searchForm->dropoff_destination = $request->input('dropoff_destination');
        $searchForm->flight_arrival_time = $request->input('flight_arrival_time');
        $searchForm->pickup_date = $request->input('pickup_date');
        $searchForm->luggage = $request->input('luggage');
        $searchForm->adults = $request->input('adults');
        $searchForm->childrens = $request->input('childrens');
        $searchForm->infants = $request->input('infants');

        // Save the SearchForm
        $searchForm->save();

        return response()->json(['isSuccessful' => true, 'data' => $searchForm, 'message' => 'Booking searched successfully'], 200);
    } catch (\Exception $e) {

        return response()->json(['isSuccessful' => false, 'message' => 'An error occurred while processing the request'], 500);
    }
}

public function cars(Request $request)
{
     $cars = Cars::with('categories')->get();
    return response()->json(['isSuccessful' => true, 'data' => $cars, 'message' => 'Cars list'], 200);
}

}
