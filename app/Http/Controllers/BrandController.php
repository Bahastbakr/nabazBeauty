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
            $fileName   = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('images/brands/' . $fileName, File::get($file));
            $brand = new Brand();
            $brand->name = request('name');
            $brand->logo = $fileName;
            $brand->save();

            return redirect(route('indexBrand'));
        }
    }
    public function delete($id)
    {
        $brand = Brand::find($id);

        if (Storage::disk('public')->exists('images/brands/' . $brand->logo)) {
            if (Storage::disk('public')->delete('images/brands/' . $brand->logo)) {
                $brand->delete();
                return redirect(route('indexBrand'));
            }
        }
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.edit', ['brand' => $brand]);
    }


    public function update($id)
    {
        $brand = Brand::find($id);
        if (request('image')) {
            $file_path = 'images/brands/' . $brand->logo;
            if (Storage::disk('public')->exists($file_path)) {
                Storage::disk('public')->delete($file_path);
            }
            $file = request('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('images/brands/' . $fileName, File::get($file));
            $brand->name = request('name');
            $brand->logo = $fileName;
        }
        $brand->update();
        return redirect(route('indexBrand'));
    }
}
