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
        $this->products = Product::all();
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
