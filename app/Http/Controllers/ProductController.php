<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        $brands = Brand::all();
        return view('products.index', ['products' => $products, 'brands' => $brands]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'brand_id' => 'required',
            'name' => 'required'

        ]);
        $file = $request->file('image');
        if ($request->file('image')) {
            $fileName   = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('images/products/' . $fileName, File::get($file));
            $product = new Product();
            $product->name = request('name');
            $product->description = request('description');
            $product->image = $fileName;
            $product->brand_id = request('brand_id');
            $product->save();

            return redirect(route('indexProduct'));
        }
    }
    public function delete($id)
    {
        $product = Product::find($id);
        if (Storage::disk('public')->exists('images/products/' . $product->image)) {
            if (Storage::disk('public')->delete('images/products/' . $product->image)) {
                $product->delete();
                return redirect(route('indexProduct'));
            }
        }
    }

    public function indexProductClient()
    {
        return view('products');
    }
    public function indexProductClientWithId($id)
    {
        return view('products');
    }

    public function edit($id)
    {
        $brands = Brand::all();
        $product = Product::find($id);
        return view('products.edit', ['product' => $product, 'brands' => $brands]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'brand_id' => 'required',
            'name' => 'required'

        ]);
        $product = Product::find($id);
        if (request('image')) {
            $file_path = 'images/products/' . $product->image;
            if (Storage::disk('public')->exists($file_path)) {
                Storage::disk('public')->delete($file_path);
            }
            $file = request('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('images/products/' . $fileName, File::get($file));
            $product->image = $fileName;
        }
        $product->name = request('name');
        $product->brand_id = request('brand_id');
        $product->description = request('description');
        $product->update();
        return redirect(route('indexProduct'));
    }
}
