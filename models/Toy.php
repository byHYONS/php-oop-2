<?php

//? classe prodotto giocattolo materiale:

class Toy extends ArcaShop {

    private string $material;

    //* costruttore:
    public function __construct($_name, $_price, $_image, $_material)
    {
        parent::__construct($_name, $_price, $_image);
        $this -> material = $_material;
    }

    //* materiale giocattolo:
    public function getToy(): string {
        return $this -> material;
    }
}
