<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        // Process the reservation logic (e.g., save to database, send email, etc.)

        // Redirect back with success message
        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }
}
