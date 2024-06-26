<?php

//? classe padre ArcaShop prodotti:
class ArcaShop {


    private string $title;
    private int $price;
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
    public function getPrice(): string {
        return $this -> price;
    }

    //* immagine prodotto:
    public function getImage(): string {
        return $this -> image;
    }
    
}
