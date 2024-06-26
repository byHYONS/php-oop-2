<?php

//? richiamo le categorie age e animal per aggiungerle ai prodotti:

trait CategoryTrait {

    private AnimalCategory $animalCategory;
    private AgeCategory $ageCategory;

    //* categoria animali:
    public function setAnimalCategory(AnimalCategory $_animal): void {
        $this -> animalCategory = $_animal;
    }

    public function getAnimalCategory(): AnimalCategory {
        return $this -> animalCategory;
    }

    //* categoria età:
    public function setAgeCategory(AgeCategory $_age): void {
        $this -> ageCategory = $_age;
    }

    public function getAgeCategory(): AgeCategory {
        return $this -> ageCategory;
    }

}
