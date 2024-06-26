<?php

//? classe per l'eta della categoria:

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
