<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Image extends Component
{
    use WithFileUploads;
    public $brand, $product;
    public $photo;

    public function render()
    {
        return view('livewire.image');
    }
}
