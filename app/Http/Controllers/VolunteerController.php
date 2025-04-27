<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    // This is the method you already have, it handles creating a new volunteer.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'skills' => 'required|string',
            'location' => 'required|string',
            'profile_link' => 'nullable|url',
            'email' => 'nullable|email',

        ]);

        try {
            $volunteer = Volunteer::create($validated);
            return response()->json($volunteer, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create volunteer', 'message' => $e->getMessage()], 500);
        }
    }

    // This is the new method you need to define. It will return all volunteers.
    public function index()
    {
        // Fetch all volunteers from the database
        $volunteers = Volunteer::all();

        // Return the list of volunteers as a JSON response
        return response()->json($volunteers);
    }
}
