<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    //Show all itineraries
    public function index()
    {
        // Fetch all itineraries from the database
         $itineraries = \App\Models\Itinerary::all();

        // Return the view and pass the data to it
        return view('itineraries.index', compact('itineraries'));
    }

    // Show the form for creating a new itinerary.
     
    public function create()
    {
         return view('itineraries.create');
    }

    // Store new itinerary into database
    public function store(Request $request)
    {
        // Validate input (basic check)
        $request->validate([
            'trip_name' => 'required',
            'destinations' => 'required',
            'overview' => 'required',
            'suggested_dates' => 'required',
            'difficulty_level' => 'required',
            'submitted_by' => 'required',
        ]);

        // Insert data into database
        Itinerary::create($request->all());

        // Redirect back to main page
        return redirect()->route('itineraries.index')
                         ->with('success', 'Itinerary added successfully!');
    }

    
    public function show(Itinerary $itinerary)
    {
        // Show the selected itinerary details
    return view('itineraries.show', compact('itinerary'));
    }

    // Show form to edit an existing itinerary
    public function edit(Itinerary $itinerary)
    {
        return view('itineraries.edit', compact('itinerary'));
    }

    // Update itinerary in database
    public function update(Request $request, Itinerary $itinerary)
     {
        $request->validate([
            'trip_name' => 'required',
            'destinations' => 'required',
            'overview' => 'required',
            'suggested_dates' => 'required',
            'difficulty_level' => 'required',
            'submitted_by' => 'required',
        ]);

        // Update existing record
        $itinerary->update($request->all());

        return redirect()->route('itineraries.index')
                         ->with('success', 'Itinerary updated successfully!');
    }

    // Delete itinerary
     public function destroy($id)
    {
     $itinerary = Itinerary::findOrFail($id);
        $itinerary->delete();

        return redirect()->route('itineraries.index')->with('success', 'Itinerary deleted successfully!');
    }
}