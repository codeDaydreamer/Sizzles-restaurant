<?php

namespace App\Http\Controllers;

use App\Models\MenuItem; // Assuming MenuItem model for menu items
use App\Models\Order; // Assuming Order model for orders
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class MenuController extends Controller
{
    /**
     * Display the menu with categorized items.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showMenu()
    {
        // Retrieve menu items categorized
        $appetizers = MenuItem::where('category', 'Appetizers')->get();
        $mainCourses = MenuItem::where('category', 'Main Courses')->get();
        $desserts = MenuItem::where('category', 'Desserts')->get();
        $drinks = MenuItem::where('category', 'Drinks')->get();

        // Return view with menu data
        return view('menu', compact('appetizers', 'mainCourses', 'desserts', 'drinks'));
    }

    /**
     * Place an order for a menu item.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function placeOrder(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'item_name' => 'required|string|max:255',
            'item_price' => 'required|numeric|min:0',
            // Add more validation rules as needed
        ]);

        // Create an order in the database
        Order::create($validated);

        // Return to the menu view with success message
        return redirect()->route('menu')->with('success', 'Order placed successfully!');
    }
}
