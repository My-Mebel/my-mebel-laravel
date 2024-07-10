<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrdersProduct;

class OrderController extends Controller
{
    // Render User 'My Orders' page    
    public function orders($id = null) { // If the slug {id?} (Optional Parameters) is passed in, this means go to the front/orders/order_details.blade.php page, and if not, this means go to the front/orders/orders.blade.php page    // Optional Parameters: https://laravel.com/docs/9.x/routing#parameters-optional-parameters    
        if (empty($id)) { // if the order id is not passed in in the route (URL) as an Optional Parameter (slug), this means go to front/orders/orders.blade.php page
            // Get all the orders of the currently authenticated/logged-in user
            $all_orders = Order::with('orders_products')->where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->orderBy('id', 'Desc')->get(); // Retrieving The Authenticated User: https://laravel.com/docs/9.x/authentication#retrieving-the-authenticated-user    // Eager Loading: https://laravel.com/docs/9.x/eloquent-relationships#eager-loading    // 'orders_products' is the relationship method name in Order.php model
            // dd($all_orders);
            
            $statuses = ['Pending', 'In Progress', 'Shipped', 'Delivered', 'Returned'];

            // Initialize an array to store filtered orders
            $orders = [];

            // Loop through each status and filter orders accordingly
            foreach ($statuses as $status) {
                $filtered_orders = $all_orders->filter(function ($order) use ($status) {
                    return $order->orders_products->contains('item_status', $status);
                });

                // Convert filtered collection to array and store it
                $orders[$status] = $filtered_orders->toArray();
            }

            return view('front.orders.orders')->with(compact('orders'));

        } else { // if the order id is passed in in the route (URL) as an Optional Parameter (slug), this means go to front/orders/order_details.blade.php page
            $orderDetails = Order::with('orders_products')->where('id', $id)->first()->toArray();// Eager Loading: https://laravel.com/docs/9.x/eloquent-relationships#eager-loading    // 'orders_products' is the relationship method name in Order.php model
            // dd($orderDetails);


            return view('front.orders.order_details')->with(compact('orderDetails'));
        }

    }

    public function returnOrderItem($product_id)
    {
        // Update Order Item Status in `orders_products` table
        OrdersProduct::where('id', $product_id)->update(['item_status' => 'Returned']);

        return redirect()->back()->with('success_message', 'Order Item has been returned successfully!');
    }
}