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
    <title><?php
        echo $blog->blogSeoTitel?></title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<!-- Her skal sidens indhold ligge -->
<div class="d-flex justify-content-center flex-column">

    <div class="bg-kurv">
        <div class="row gx-0 d-flex flex-column flex-md-row">
            <!--img-->
            <div class="d-flex flex-column flex-md-row">
                <img class="obj col-12 col-md-6" src="uploads/<?php echo $blog->blogBillede;?>" alt="<?php echo $blog->blogSeoAlt;?>">
            </div>
            <!--produktNavn og produktbeskrivelse-->
            <div class="col-12 col-md-6 d-flex align-items-center ">
                <div class="mx-4 mx-md-5">
                    <h1 class="mt-5">
                        <?php
                        echo $blog->blogOverskrift
                        ?>
                    </h1>

                    <p class="fs-4 mt-3 mb-3">
                        <?php
                        echo $blog->blogTekst
                        ?>
                    </p>









<?php
}
?>



</body>
</html>
