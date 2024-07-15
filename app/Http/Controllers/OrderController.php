<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'item_name' => 'required|string',
                'item_price' => 'required|numeric',
            ]);

            // Log the incoming request data for debugging
            Log::debug('Incoming request data:', $validatedData);

            // Process the order, e.g., store in database
            $order = Order::create([
                'item_name' => $validatedData['item_name'],
                'item_price' => $validatedData['item_price'],
                // Add any additional fields you need for the order
            ]);

            // Log the created order details
            Log::info('Order placed successfully:', $order->toArray());

            // Optionally, you can return a success response or redirect back to the menu page
            return back()->with('success', 'Order placed successfully!');

        } catch (\Exception $e) {
            // Log any exceptions that occur during order processing
            Log::error('Error placing order:', ['exception' => $e->getMessage()]);

            // Return an error response or redirect with error message
            return back()->with('error', 'Failed to place order. Please try again.');
        }
    }
}
