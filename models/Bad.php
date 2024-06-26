<?php

//? classe prodotto lettino taglia:

class Bad extends ArcaShop {

    private string $size;

    //* costruttore:
    public function __construct($_name, $_price, $_image, $_size)
    {
        parent::__construct($_name, $_price, $_image);
        $this -> size = $_size;
    }

    //* taglia lettino:
    public function getBad(): string {
        return $this -> size;
    }
}
