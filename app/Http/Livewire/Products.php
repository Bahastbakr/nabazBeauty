<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;

class Products extends Component
{
    public $products, $brands;
    public $selectedBrand;
    public function mount()
    {
        $get_id = request('id');
        if ($get_id) {
            $this->selectedBrand = $get_id;
            $this->products = Product::where('brand_id', $get_id)->get();
        } else {
            $this->products = Product::all();
        }
        $this->brands = Brand::all();
        return view('livewire.products');
    }

    public function render()
    {
        return view('livewire.products');
    }

    public function updatedSelectedBrand($id)
    {

        $this->products = Product::where('brand_id', $id)->get();
        if (!$id) {
            $this->products = Product::all();
        }
    }
}
