<?php

//? importo file:
require_once __DIR__ . '/models/ArcaShop.php';
require_once __DIR__ . '/models/AnimalCategory.php';
require_once __DIR__ . '/models/AgeCategory.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Bed.php';

//? creo la categorie cane e gatto:
$dog = new AnimalCategory('cane', 'dog-icon-jpg');
$cat = new AnimalCategory('gatto', 'cat-icon-jpg');

//? creo categorie età:
$puppy = new AgeCategory('cucciolo');
$adult = new AgeCategory('adulto');

//? prodotti:
$prodacts = [
    //* cibo:
    $goldcrock = new Food('croccantini per cane', 19.90, 'dog-food01.jpg', 'manzo'),
    $silvercrock = new Food('croccantini per gatto', 12.50, 'cat-food01.jpg', 'pollo'),

    //* giocattoli:
    $superpalla = new Toy('pallina per gatto', 9.90, 'cat-toy01.jpg', 'lana'),
    $superosso = new Toy('osso per cane', 8.9, 'dog-toy01.jpg', 'spugna'),

    //* lettni o cuccie:
    $dolcecuccia = new Bed('ciccia per cani', 45.90, 'dog-bad01.jpg', 'grande'),
    $sofficeletto = new Bed('lettino per gatto', 25.90, 'cat-bed01.png', 'media'),

];
var_dump($prodacts);

//? assegno ai prodotti creati le categorie:
// $goldcrock -> 