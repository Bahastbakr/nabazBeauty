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
        $products = Product::all();
        $brands = Brand::all();
        return view('products.index', ['products' => $products, 'brands' => $brands]);
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        if ($request->file('image')) {
            $fileName   = time() . $file->getClientOriginalName();
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
}
