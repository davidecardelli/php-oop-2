<?php
include __DIR__ . '/Model/product.php';
include __DIR__ . '/Model/FoodProduct.php';
include __DIR__ . '/Model/KennelProduct.php';
include __DIR__ . '/Model/ToyProduct.php';

$dog_category = new Category('Dog', 'fa-solid fa-dog');
$cat_category = new Category('Cat', 'fa-solid fa-cat');

$foods =
    [
        new FoodProduct('Scatolette di pollo', '5.50', 'Freschissime scatolette di pollo', 'https://parafarmaciapet.com/2648-large_default/belcando-single-protein-pollo-400-gr-.jpg', $dog_category, ['pollo', 'spezie'], '2023.12.31'),
        new FoodProduct('Scatolette di tonno', '5.50', 'Freschissime scatolette di tonno', 'https://arcaplanet.vtexassets.com/arquivos/ids/247626/gou-diamant-85-gr-squisite-falde-di-tonno-in-salsa.jpg?v=1763394290', $cat_category, ['tonno', 'spezie'], '2023.12.31'),
        new FoodProduct('Scatolette di pollo', '5.50', 'Freschissime scatolette di pollo', 'https://parafarmaciapet.com/2648-large_default/belcando-single-protein-pollo-400-gr-.jpg', $dog_category, ['pollo', 'spezie'], '2023.12.31'),
        new FoodProduct('Scatolette di tonno', '5.50', 'Freschissime scatolette di tonno', 'https://arcaplanet.vtexassets.com/arquivos/ids/247626/gou-diamant-85-gr-squisite-falde-di-tonno-in-salsa.jpg?v=1763394290', $cat_category, ['tonno', 'spezie'], '2023.12.31'),
        new FoodProduct('Scatolette di pollo', '5.50', 'Freschissime scatolette di pollo', 'https://parafarmaciapet.com/2648-large_default/belcando-single-protein-pollo-400-gr-.jpg', $dog_category, ['pollo', 'spezie'], '2023.12.31'),
        new FoodProduct('Scatolette di tonno', '5.50', 'Freschissime scatolette di tonno', 'https://arcaplanet.vtexassets.com/arquivos/ids/247626/gou-diamant-85-gr-squisite-falde-di-tonno-in-salsa.jpg?v=1763394290', $cat_category, ['tonno', 'spezie'], '2023.12.31'),
        new FoodProduct('Scatolette di pollo', '5.50', 'Freschissime scatolette di pollo', 'https://parafarmaciapet.com/2648-large_default/belcando-single-protein-pollo-400-gr-.jpg', $dog_category, ['pollo', 'spezie'], '2023.12.31'),
        new FoodProduct('Scatolette di tonno', '5.50', 'Freschissime scatolette di tonno', 'https://arcaplanet.vtexassets.com/arquivos/ids/247626/gou-diamant-85-gr-squisite-falde-di-tonno-in-salsa.jpg?v=1763394290', $cat_category, ['tonno', 'spezie'], '2023.12.31'),
    ];

$toys =
    [
        new ToyProduct('Osso', '5.50', 'Osso di seppia', 'https://shop-cdn-m.mediazs.com/bilder/barkoo/ossi/pressati/in/pelle/di/manzo/8/400/56980_barkoo_kauknochen_gepresst_web_8.jpg', $dog_category, 'red', ['plastica', 'gomma']),
        new ToyProduct('Tiragraffi', '5.50', 'Tiragraffi a colonna', 'https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/karlie/rofra/0/400/308196_pla_karlie_kratzbaum_rofra_hs_01_0.jpg', $cat_category, 'black', ['corda', 'legno']),
        new ToyProduct('Osso', '5.50', 'Osso di seppia', 'https://shop-cdn-m.mediazs.com/bilder/barkoo/ossi/pressati/in/pelle/di/manzo/8/400/56980_barkoo_kauknochen_gepresst_web_8.jpg', $dog_category, 'red', ['plastica', 'gomma']),
        new ToyProduct('Tiragraffi', '5.50', 'Tiragraffi a colonna', 'https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/karlie/rofra/0/400/308196_pla_karlie_kratzbaum_rofra_hs_01_0.jpg', $cat_category, 'black', ['corda', 'legno']),
        new ToyProduct('Osso', '5.50', 'Osso di seppia', 'https://shop-cdn-m.mediazs.com/bilder/barkoo/ossi/pressati/in/pelle/di/manzo/8/400/56980_barkoo_kauknochen_gepresst_web_8.jpg', $dog_category, 'red', ['plastica', 'gomma']),
        new ToyProduct('Tiragraffi', '5.50', 'Tiragraffi a colonna', 'https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/karlie/rofra/0/400/308196_pla_karlie_kratzbaum_rofra_hs_01_0.jpg', $cat_category, 'black', ['corda', 'legno']),
        new ToyProduct('Osso', '5.50', 'Osso di seppia', 'https://shop-cdn-m.mediazs.com/bilder/barkoo/ossi/pressati/in/pelle/di/manzo/8/400/56980_barkoo_kauknochen_gepresst_web_8.jpg', $dog_category, 'red', ['plastica', 'gomma']),
        new ToyProduct('Tiragraffi', '5.50', 'Tiragraffi a colonna', 'https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/karlie/rofra/0/400/308196_pla_karlie_kratzbaum_rofra_hs_01_0.jpg', $cat_category, 'black', ['corda', 'legno']),
    ];

$kennels =
    [
        new KennelProduct('Casetta di legno', '5.50', 'Casetta di legno da esterno', 'https://www.vidaxl.it/dw/image/v2/BFNS_PRD/on/demandware.static/-/Sites-vidaxl-catalog-master-sku/default/dw2d92b137/hi-res/1/2/5/5094/45151/image_1_45151.jpg?sw=400', $dog_category, 'red', 'big'),
        new KennelProduct('Cuccia a ventosa', '5.50', 'Cuccia a ventosa per finestre', 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dwc342afa5/images_dmail/large/503389l.jpg', $cat_category, 'black', 'small'),
        new KennelProduct('Casetta di legno', '5.50', 'Casetta di legno da esterno', 'https://www.vidaxl.it/dw/image/v2/BFNS_PRD/on/demandware.static/-/Sites-vidaxl-catalog-master-sku/default/dw2d92b137/hi-res/1/2/5/5094/45151/image_1_45151.jpg?sw=400', $dog_category, 'red', 'big'),
        new KennelProduct('Cuccia a ventosa', '5.50', 'Cuccia a ventosa per finestre', 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dwc342afa5/images_dmail/large/503389l.jpg', $cat_category, 'black', 'small'),
        new KennelProduct('Casetta di legno', '5.50', 'Casetta di legno da esterno', 'https://www.vidaxl.it/dw/image/v2/BFNS_PRD/on/demandware.static/-/Sites-vidaxl-catalog-master-sku/default/dw2d92b137/hi-res/1/2/5/5094/45151/image_1_45151.jpg?sw=400', $dog_category, 'red', 'big'),
        new KennelProduct('Cuccia a ventosa', '5.50', 'Cuccia a ventosa per finestre', 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dwc342afa5/images_dmail/large/503389l.jpg', $cat_category, 'black', 'small'),
        new KennelProduct('Casetta di legno', '5.50', 'Casetta di legno da esterno', 'https://www.vidaxl.it/dw/image/v2/BFNS_PRD/on/demandware.static/-/Sites-vidaxl-catalog-master-sku/default/dw2d92b137/hi-res/1/2/5/5094/45151/image_1_45151.jpg?sw=400', $dog_category, 'red', 'big'),
        new KennelProduct('Cuccia a ventosa', '5.50', 'Cuccia a ventosa per finestre', 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dwc342afa5/images_dmail/large/503389l.jpg', $cat_category, 'black', 'small'),
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- COLLEGAMENTO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- COLLEGAMENTO ICONE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Pet Shop</title>
</head>

<body>
    <header class="bg-black text-center py-3">
        <h1 class="text-white">Pet Shop</h1>
    </header>

    <main class="bg-secondary">
        <div class="container pb-5">

            <!-- Start Food -->
            <div class="row">
                <?php foreach ($foods as $food) : ?>
                    <div class="col text-center">
                        <div class="card mt-5">
                            <img src="<?= $food->getImage() ?>" style="width: 250px;" class="card-img-top m-auto" alt="<?= $food->getName() ?>">
                            <div class="card-body">
                                <h4 class="card-text p-1 m-0 mb-2"><?= $food->getName() ?></h4>
                                <p class="card-text p-1 m-0"><b>Descrizione: </b><?= $food->getDescription() ?></p>
                                <p class="card-text p-1 m-0"><b>Prezzo: </b><?= $food->getPrice() ?></p>
                                <p class="card-text p-1 m-0"><b>Ingredienti: </b><?= $food->listIngredients() ?></p>
                                <p class="card-text p-1 m-0"><b>Scadenza: </b><?= $food->getExpiration() ?></p>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End Food -->


            <!-- Start Toy -->
            <div class="row">
                <?php foreach ($toys as $toy) : ?>
                    <div class="col text-center">
                        <div class="card mt-5">
                            <img src="<?= $toy->getImage() ?>" style="width: 250px;" class="card-img-top m-auto" alt="<?= $toy->getName() ?>">
                            <div class="card-body">
                                <h4 class="card-text p-1 m-0 mb-2"><?= $toy->getName() ?></h4>
                                <p class="card-text p-1 m-0"><b>Descrizione: </b><?= $toy->getDescription() ?></p>
                                <p class="card-text p-1 m-0"><b>Prezzo: </b><?= $toy->getPrice() ?></p>
                                <p class="card-text p-1 m-0"><b>Colore: </b><?= $toy->getColor() ?></p>
                                <p class="card-text p-1 m-0"><b>Materiali: </b><?= $toy->listMaterials() ?></p>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End Toy -->

            <!-- Start Kennel -->
            <div class="row">
                <?php foreach ($kennels as $kennel) : ?>
                    <div class="col text-center">
                        <div class="card mt-5">
                            <img src="<?= $kennel->getImage() ?>" style="width: 250px;" class="card-img-top m-auto" alt="<?= $kennel->getName() ?>">
                            <div class="card-body">
                                <h4 class="card-text p-1 m-0 mb-2"><?= $kennel->getName() ?></h4>
                                <p class="card-text p-1 m-0"><b>Descrizione: </b><?= $kennel->getDescription() ?></p>
                                <p class="card-text p-1 m-0"><b>Prezzo: </b><?= $kennel->getPrice() ?></p>
                                <p class="card-text p-1 m-0"><b>Colore: </b><?= $kennel->getColor() ?></p>
                                <p class="card-text p-1 m-0"><b>Dimensione: </b><?= $kennel->getSize() ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End Kennel -->

        </div>
    </main>

</body>

</html>