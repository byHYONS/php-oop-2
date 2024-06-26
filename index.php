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
$products = [
    //* cibo:
    $goldcrock = new Food('croccantini per cane', 19.90, 'dog-food01.jpg', 'manzo'),
    $silvercrock = new Food('croccantini per gatto', 12.50, 'cat-food01.jpg', 'pollo'),

    //* giocattoli:
    $superpalla = new Toy('pallina per gatto', 9.90, 'cat-toy01.jpg', 'lana'),
    $superosso = new Toy('osso per cane', 8.9, 'dog-toy01.jpg', 'spugna'),

    //* lettni o cuccie:
    $dolcecuccia = new Bed('cuccia per cane', 45.90, 'dog-bad01.jpg', 'grande'),
    $sofficeletto = new Bed('lettino per gatto', 25.90, 'cat-bed01.png', 'media'),

];
// var_dump($prodacts);

//? assegno ai prodotti creati le categorie:
$goldcrock -> setAnimalCategory($dog);
$goldcrock -> setAgeCategory($puppy);

$silvercrock -> setAnimalCategory($cat);
$silvercrock -> setAgeCategory($adult);

$superpalla -> setAnimalCategory($cat);
$superpalla -> setAgeCategory($puppy);

$superosso -> setAnimalCategory($dog);
$superosso -> setAgeCategory($adult);

$dolcecuccia -> setAnimalCategory($dog);
$dolcecuccia -> setAgeCategory($adult);

$sofficeletto -> setAnimalCategory($cat);
$sofficeletto -> setAgeCategory($puppy);

// var_dump($goldcrock);
// var_dump($sofficeletto);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="/style.css">
    
    <title>Arca Shop</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <h2>Arca Shop</h2>
        </div>
    </header>
    <!-- /HEADER -->

    <main>
        <div class="container mt mb">
            <div class="row">

                <?php foreach ($products as $product): ?>
                    <div class="col-6 card">
                        <img src="<?php echo './img/'.$product -> getImage() ?>" alt="">
                        <h2><?php echo $product -> getTitle(); ?></h2>
                    </div>
                <?php endforeach ?>



            </div>
        </div>

    </main>

    <footer>
        <div class="container">
            <h6>© byHYONS™ | 2024</h6>
        </div>
    
</body>
</html>