<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProduitEnAvant extends Component
{
    /**
     * Create a new component instance.
     */
    public $products;
    public $title;


    public function __construct($products = [], $title = "")
    {
        $this->products = $products;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.love-and-deepspace.produit-en-avant');
    }
}
