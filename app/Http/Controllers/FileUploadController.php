<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\File;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'file' => 'required',

        ]);

        $file = $request->file('file');

        $path = public_path('images/');
        $file->move($path, $file->getClientOriginalName());
        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->name;
        $product->category_id = $request->name;
        $product->file = $file->getClientOriginalName();
        $product->save();
        return redirect('products.view')->with('status', 'File Has been uploaded successfully in laravel 8');

    }

    public function viewImage()
    {
        return view('products.create');
    }
}
