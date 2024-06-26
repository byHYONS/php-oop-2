<?php

//? clessa per la categoria (cani o gatti):

class AnimalCategory {
    private string $name;
    private string $icon;

    //* costruttore:
    public function __construct($_name, $_icon)
    {
        $this -> name = $_name;
        $this -> icon = $_icon;
    }

    //* nome:
    public function getName(): string {
        return $this -> name;
    }

    //* icona categoria:
    public function geIcon(): string {
        return $this -> icon;
    }

}
