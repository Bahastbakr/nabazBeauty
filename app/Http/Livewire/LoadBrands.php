<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand;

class LoadBrands extends Component
{
    public $brands;
    public $amount = 4;
    public function render()
    {
        $this->brands = Brand::take($this->amount)->get();
        return view('livewire.load-brands');
    }
    public function loadMore()
    {
        $this->amount += 4;
    }
}
