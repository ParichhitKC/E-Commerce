<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class KhaltiController extends Controller
{

    public function verify(Request $request)
    {
        $token = $request->token;

        $args = http_build_query(array(
            'token' => $token,
            'amount' => 1000
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $secret_key = config('app.khalti_secret_key');

        $headers = ["Authorization: Key $secret_key"];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function store(Request $request)

    {
        $cart= Cart::all();
        $total=0;
foreach($cart as $c)
{
    $total+=$c->product*$c->quantity;
}
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->order_total = $request['Total'];
        $order->is_paid = 1;
        $order->payment_method = 'Khalti';
        $order->order_status = "Order Placed";
        $order->save();

        foreach ($cart as $cartitem){
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $cartitem->product;
            $cartitem->price;
            $cartitem->quantity;
        }
        // $response = $request->response;
        // store the data to database here\
        return response()->noContent();

    }

}
