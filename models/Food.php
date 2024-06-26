<?php

//? classe prodotto cibo gusto:

class Food extends AnimalCategory {

    private string $flavor;

    //* costruttore:
    public function __construct($_mane, $_price, $_image, $_flavor)
    {
        parent::__construct($_mane, $_price, $_image);
        $this -> flavor = $_flavor;
    }

    //* gusto:
    public function getFlavor(): string {
        return $this -> flavor;
    }

}
