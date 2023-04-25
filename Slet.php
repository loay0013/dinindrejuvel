<!--select produkter fra sql-->
<?php
require "settings/init.php";
if(!empty($_GET["type"])){
    if($_GET["type"] == "slet"){
        $id = $_GET["id"];
        $db->sql("DELETE FROM blog WHERE BlogId =:BlogId",[":BlogId" =>$id], false);


    }
}


$blog = $db->sql("SELECT * FROM blog WHERE BlogId =BlogId;");
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
    <title>Slet</title>

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
            <!--produktNavn og produktbeskrivelse-->
            <div class="col-12 col-md-6 d-flex align-items-center ">
                <div class="mx-4 mx-md-5">

                    <p>
                        <?php
                        echo $blog->blogDato
                        ?>
                    </p>
                    <h1 class="mt-5">
                        <?php
                        echo $blog->blogOverskrift
                        ?>
                    </h1>
                    <p class="mt-5">
                        <?php
                        echo $blog->blogKortTekst
                        ?>
                    </p>
                    <div>
                        <a href="slet.php?type=slet&id=<?php echo $blog->BlogId?>">Slet</a>
                    </div>

                    <div>
                        <a href="update.php?type=rediger&id=<?php echo $blog->BlogId?>">Rediger</a>
                    </div>

                    <?php
                    }
                    ?>



</body>
</html>
