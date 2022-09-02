<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
class FrontendController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('frontend.index')->with(compact('products'));

    }
    public function shop(){
        $products = Product::all();
        return view('frontend.shop')->with (compact('products'));
    }
    public function about(){
        $products = Product::all();
        return view('frontend.about')->with (compact('products'));
    }
    public function contact(){
        $products = Product::all();
        return view('frontend.contact')->with (compact('products'));
    }
    public function account(){
        $products = Product::all();
        return view('frontend.account')->with (compact('products'));
    }
    public function Profile(){
        $user =  User::find(Auth::user()->id);
        return view('frontend.profile',compact('user'));
    }
    public function save(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->address = $request->input('Address');
        $user->save();


        return redirect()->route('frontend.profile')
            ->with('success','Profile updated successfully');
    }
    public function cart(){
        $cart = session()->get('cart');
        $products = Product::all();
        return view('frontend.cart')->with (compact('products','cart'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->file
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeCart(Request $request)

    {
        if($request->product_id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }
    }
}

