<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\cart;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        $order = new order();
        $order->user_id = Auth::user()->id;
        $order->order_total = $request['Total'];
        $order->is_paid = 0;
        $order->payment_method = 'khalti';
        $order->order_status='1' ;
        $order->save();
    
        $cart = session()->get('cart');
        // dd($cart);
        foreach ($cart as $cartitem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product = $cartitem['name'];
            $orderItem->price= $cartitem['price'];
            $orderItem->quantity= $cartitem['quantity'];
            $orderItem->save();
                
        }

        return view('order.cust',compact('order'));
    }

        public function AdminOrder(Request $request, $id)
        {
            $order = order::find($id);
            $order->order_status = $request['order_status'];
//            $order = $request['order_status'];
//            dd($id);
            $order->save();
            return redirect()->route('AdminorderView');
        }
        

        public function AdminOrderView()
        {
            $order= order::all();
            return view('order.list',compact('order'));
        }

    public function update(Request $request, order $order)
    {
        request()->validate([
            'order status' => 'required',
        ]);

        $order->order_status = $request->order_status;

        return redirect()->route('Adminorder')
            ->with('success','order status updated successfully');
    }
    public function CustOrder()
    {
        $order = order::where('user_id',Auth::user()->id);
        return view('order.cust',compact('order'));

    }
    public function Cust()
    {
        $order = Order::where('user_id',Auth::user()->id)->get();
    
        // dd(Auth::user());
        return view('order.cList',compact('order'));
    }
    
}
