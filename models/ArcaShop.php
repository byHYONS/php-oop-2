<?php

//? importo file:
require_once __DIR__ . '/CategoryTrait.php';

//? classe padre ArcaShop prodotti:
class ArcaShop {

    use CategoryTrait;

    private string $title;
    private float $price;
    private string $image;

    //* costruttore:
    public function __construct($_title, $_price, $_image)
    {
        $this -> title = $_title;
        $this -> price = $_price;
        $this -> image = $_image;
    }

    //* titolo prodotto:
    public function getTitle(): string {
        return $this -> title;
    }

    //* prezzo prodotto:
    public function getPrice(): float {
        return $this -> price;
    }

    //* immagine prodotto:
    public function getImage(): string {
        return $this -> image;
    }
    
}
