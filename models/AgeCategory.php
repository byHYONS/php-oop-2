<?php

//? classe per l'età della categoria:

class AgeCategory {
    private string $name;

    //* costruttore:
    public function __construct($_name) 
    {
        $this -> name = $_name;   
    }

    //* nome:
    public function getName(): string {
        return $this -> name;
    }
}
