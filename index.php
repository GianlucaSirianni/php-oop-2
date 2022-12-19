<?php

include_once __DIR__ . './bellacartella/accessori.php';
include_once __DIR__ . './bellacartella/giocattoli.php';
include_once __DIR__ . './bellacartella/category.php';
include_once __DIR__ . './bellacartella/cibo.php';
include_once __DIR__ . './bellacartella/prodotto.php';


$generi = [
    'cane' => new Generi('cane', 'fa-solid fa-dog'),
    'gatto' => new Generi('gatto', 'fa-solid fa-cat'),
    'uccelli' => new Generi('uccelli', 'fa-solid fa-dove')
  ];

  $arrayCibo = [
    new Cibo( 'https://cdn.royalcanin-weshare-online.io/v2k6a2QBG95Xk-RBN9oV/v196/packshot-mini-ad-shn17', 'Royal Canin', 43.49, $generi['cane'], 545, 'prosciutto e riso' ),
    new Cibo( 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg', 'Almo Nature', 44.99, $generi['cane'],  600, 'manzo, cereali' ),

  ];

  $arrayAccessory = [

    new Accessori('https://static.bighunter.net/foto/1_Def_per_web_zoom/14089/14089.jpg', 'Voliera Ferplast Bella Casa', 184.99, $generi['uccelli'], 'legno', 'M: L83 x P67 x H153 cm '),

  ];

  $arrayGiocattoli = [
    new Giocattoli( 'https://i.ebayimg.com/images/g/03kAAOSwA4BbK4Gm/s-l500.jpg', 'Topini di Peluche Trixie', 4.99, $generi['gatto'], 'Morbido con codina in corda', '8.5 cm x 10 cm') 
  ];
  

  


?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Title</title>
    <!-- BOOSTRAP CSS LINK-->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <!-- FONTAWESOME LINK-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
    <!-- CSS LINK-->
    <link rel='stylesheet' href='./style.css'>
</head>

<body>


<div class="container">
        <div class="row">
            
        <div class="col-4 ">
               <?php foreach ($arrayCibo as $element) { ?>
                   <div class="card">
                    <img src= "<?php echo $element -> immagine ?>" class="card-img-top w-100" alt="...">
                    <div class="card-body ">
                        <h4 class="card-title text-dark text-uppercase"><?php echo $element -> nome ?></h4>
                        <?php foreach($generi as $el) ?>
                        <i class="<?php echo $el -> icona ?>"></i>
                        <p>
                            <?php echo $el -> nome ?>
                        </p>
                        <h5 class="card-title text-dark opacity-50">
                        <?php echo $element -> prezzo  ?>
                        </h5>
                        <p class="card-text text-dark opacity-50">
                        <?php echo $element -> pesoNetto  ?>
                        <p class="card-text text-dark opacity-50">
                        <?php echo $element -> ingredienti  ?>
                        </p>
                        </p>

                    </div>
                </div> 
        <?php } ?> 
            </div>


        </div>
    </div>




    <!-- BOOTSTRAP JAVASCRIPT LINK-->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script>

</body>

</html>