<!--select produkter fra sql-->
<?php
require "settings/init.php";
$bind =[":BlogId"=> $_GET["BlogId"]];
$blog = $db->sql("SELECT * FROM blog WHERE BlogId =:BlogId;", $bind);
?>



<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">
    <?php
    foreach ($blog as $blog){
    ?>
    <!-- Titel som ses oppe i browserens tab mv. -->
    <title><?php echo $blog->blogSeoTitel?></title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="<?php echo $blog->blogSeoDescription?>">
    <link rel='icon' href='img/SoMeicone.png' type='image/x-icon' sizes="40x40" />
    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->
<?php include "includes/nav.php"?>
    <div class="bg-Beige">
            <div class="d-flex flex-column align-items-center container ">
                    <p class="mt-5">
                        <?php
                        echo $blog->blogDato
                        ?>

                    </p>
                    <h1 class="mt-3 ">
                        <?php
                        echo $blog->blogOverskrift
                        ?>
                    </h1>
                    <div class="d-flex mt-3 justify-content-center">
                        <img class="blog-billede" src="uploads/<?php echo $blog->blogBillede;?>" alt="<?php echo $blog->blogSeoAlt;?>">
                    </div>
                <div class="mt-5 mb-5 container">
                    <p>
                        <?php
                        echo $blog->blogTekst
                        ?>
                    </p>
                </div>
                <div class="d-flex flex-md-row flex-column container">
                    <div class="d-flex flex-column mb-5">
                        <img class="col-12 col-md-6" src="uploads/<?php echo $blog->productBillede1;?>" alt="<?php echo $blog->productBillede1;?>">
                        <p><?php echo $blog->productNavn1;?></p>
                        <a class="text-decoration-none" href="<?php echo $blog->productLink1;?>">
                        <button class="rounded-5 bg-Gul text-Beige border-0 d-flex w-text mt-4 p-1 px-4">Gå til webshop
                            <img class="pt-1 ps-2" src="img/arrowup 2.svg"  alt="arrowup">
                        </button>
                        </a>
                    </div>

                    <div class="d-flex flex-column mb-5">
                        <img class="col-12 col-md-6" src="uploads/<?php echo $blog->productBillede2;?>" alt="<?php echo $blog->productBillede2;?>">
                        <p><?php echo $blog->productNavn2;?></p>
                        <a class="text-decoration-none" href="<?php echo $blog->productLink2;?>">
                        <button class="rounded-5 bg-Gul text-Beige border-0 d-flex w-text  mt-4 p-1 px-4">Gå til webshop
                            <img class="pt-1 ps-2" src="img/arrowup 2.svg"  alt="arrowup">
                        </button>
                        </a>
                    </div>

                    <div class="d-flex flex-column mb-5">
                        <img class="col-12 col-md-6" src="uploads/<?php echo $blog->productBillede3;?>" alt="<?php echo $blog->productBillede3;?>">
                        <p><?php echo $blog->productNavn3;?></p>
                        <a class="text-decoration-none" href="<?php echo $blog->productLink3;?>">
                        <button class="rounded-5 bg-Gul text-Beige border-0 d-flex w-text  mt-4 p-1 px-4">Gå til webshop
                            <img class="pt-1 ps-2" src="img/arrowup 2.svg"  alt="arrowup">
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


<?php
}
?>


<?php include "includes/footer.php"?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/active.js"></script>

</body>
</html>


