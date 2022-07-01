<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', ['brands' => $brands]);
    }
    public function store(Request $request)
    {
        $file = $request->file('image');
        if ($request->file('image')) {
            $fileName   = time() . $file->getClientOriginalName();
            Storage::disk('public')->put('images/brands/' . $fileName, File::get($file));
            $brand = new Brand();
            $brand->name = request('name');
            $brand->logo = $fileName;
            $brand->save();

            return redirect(route('indexBrand'));
        }
    }
}
