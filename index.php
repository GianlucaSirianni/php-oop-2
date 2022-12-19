<?php

include_once __DIR__ . './bellacartella/accessori.php';
include_once __DIR__ . './bellacartella/giocattoli.php';
include_once __DIR__ . './bellacartella/category.php';
include_once __DIR__ . './bellacartella/cibo.php';
include_once __DIR__ . './bellacartella/prodotto.php';

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Title</title>
    <!-- BOOSTRAP CSS LINK-->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <!-- FONTAWESOME LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php
    $category = [
        'cane' => new Generi('cane', 'fa-solid fa-dog'),
        'uccello' => new Generi('uccello', 'fa-solid fa-dove'),
        'gatto' => new Generi('gatto', 'fa-solid fa-cat')
    ];

    var_dump($category);

    $prodotti = [
        new Cibo('https://cdn.royalcanin-weshare-online.io/v2k6a2QBG95Xk-RBN9oV/v196/packshot-mini-ad-shn17', 'Royal Canin', 43.99, $category['cane'], 545, 'prosciutto, riso'),
        new Cibo('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg', 'Almo Nature', 44.99, $category['cane'], 600, 'manzo, cereali'),
        new Accessori('https://static.bighunter.net/foto/1_Def_per_web_zoom/14089/14089.jpg', 'Voliera Ferplast Bella Casa', 184.99, $category['uccello'], 'legno', 'M: L83 x P67 x H153 cm '),
        new Giocattoli('https://i.ebayimg.com/images/g/03kAAOSwA4BbK4Gm/s-l500.jpg', 'Topini di Peluche Trixie', 4.99, $category['gatto'], 'Morbido con codina in corda', '8.5 cm x 10 cm')
    ];
    ?>
    <div class="container">
        <div class="row">
            <?php
            // Ciclo per scorrere l'array $prodotti
            foreach ($prodotti as $data) {
                // Verifico se il prodotto appartiene alla categoria 'cane'
                if ($data->category->nome == 'cane') {
            ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo $data->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $data->nome ?>
                        </h4>
                        <h6 class="card-title text-uppercase">
                            <?php echo $data->category->nome ?>
                            <i class="<?php echo $data->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $data->prezzo ?> $
                        </h5>
                        <p class="card-text opacity-75">
                            peso netto:
                            <?php echo $data->pesoNetto ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredienti:
                            <?php echo $data->ingredienti ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php

            foreach ($prodotti as $data) {

                if ($data->category->nome == 'uccello') {
            ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo $data->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $data->nome ?>
                        </h4>
                        <h6 class="card-title text-uppercase">
                            <?php echo $data->category->nome ?>
                            <i class="<?php echo $data->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $data->prezzo ?> $
                        </h5>
                        <p class="card-text opacity-75">
                            Materiale:
                            <?php echo $data->materiale ?>
                        </p>
                        <p class="card-text opacity-75">
                            Dimensioni:
                            <?php echo $data->dimensioni ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php

            foreach ($prodotti as $data) {

                if ($data->category->nome == 'gatto') {
            ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo $data->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $data->nome ?>
                        </h4>
                        <h6 class="card-title text-uppercase">
                            <?php echo $data->category->nome ?> 
                            <i class="<?php echo $data->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $data->prezzo ?> $
                        </h5>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $data->caratteristiche ?>
                        </p>
                        <p class="card-text opacity-75">
                            Dimensioni:
                            <?php echo $data->dimensioni ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- BOOTSTRAP JAVASCRIPT LINK-->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3'
        crossorigin='anonymous'></script>

</body>

</html>