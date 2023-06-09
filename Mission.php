<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title> Mission | Din Indre Juvel </title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Oplev en dybere forbindelse til dig selv og det guddommelige gennem vores missionsside om spiritualitet.
    Få inspiration og vejledning til at udforske din åndelighed og finde indre ro og harmoni.">
    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!--icon til fane-->
    <link rel='icon' href='img/SoMeicone.png' type='image/x-icon' sizes="40x40" />

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="bg-Beige">
<!--navbar-->
<?php include "includes/nav.php"?>
<!--tekst-->
<div class=" m-5 text-center">
    <h1>
        Vores mission er egentlig ret simpel
    </h1>
</div>
<!--img-->
<section class="container d-flex justify-content-center">
    <img class="mission-billede rounded-4 " src="img/Mission-img.webp" alt="mission billede">
    <img class="d-none d-md-block mission-billede rounded-4" src="img/Mission2.webp" alt="mission billede">
</section>
<!--tekst-->
<div class="container text-center mt-5">
    <h4>
        Vores mission er at dele ud af gratis selvhjælp, så vi alle kan løftes
    </h4>
    <p class="text-center m-5">
        VI ØNSKER AT SKABE:
    </p>
</div>
<!--4 boxer-->
<section class="d-flex justify-content-center container">
<div class="d-flex justify-content-center flex-md-row flex-column mb-5 col-12 col-md-12  gap-4">
    <!--box1-->
    <div class="bg-Rosa2 card d-flex flex-column  py-5">
        <h5 class="text-center mt-2 text-Blå2">
            BALANCE
        </h5>
        <p class="text-Blå2 mx-4 mt-5">
            At skabe balance mellem arbejde og privatliv, gå-på-mod og tilbagetrækning, socialt samvær og tiltrængt egentid
        </p>
    </div>
    <!--box2-->
<div class="flex-column align-items-center col-12 col-md-4 d-flex">
    <div class="bg-Blå2 card d-flex flex-column mb-4 py-5">
        <h5 class="text-center mt-2 text-Rosa2">
            MOD
        </h5>
        <p class="text-center mt-2 text-Rosa2 mx-4 mb-3">
            At skabe evnen til, at konfrontere indre konflikter og usikkerheder.
        </p>
    </div>
    <!--box3-->
    <div class="bg-Blå2 card d-flex flex-column  py-5">
        <h5 class="text-center mt-2 text-Rosa2">
            FRED
        </h5>
        <p class="text-center mt-2 text-Rosa2 mx-4 mb-3">
            At skabe plads til indre ro, ved brug af mindfullness, meditation og ritualer der styrker det indre
        </p>
    </div>
</div>
    <!--box4-->
    <div class="bg-Rosa2 card d-flex flex-column col-12 col-md-4  py-5">
        <h5 class="text-center mt-2 text-Blå2">
            HARMONI
        </h5>
        <p class="text-Blå2 mx-4 mt-5">
            At skabe det harmoniske liv, hvor den positive sammenhæng mellem det indre og ydre kommer til udtryk
        </p>
    </div>
</div>
</section>
<!--underskrift-->
<section class="d-flex flex-column container justify-content-start">
    <p class="underskrift p-5 pb-0">Stine B. Hajjo</p>
    <p class="p-5"> Stine Brooklyn Hajjo</p>

</section>
<!--footer-->
<?php include "includes/footer.php"?>
<!--bootstrap js-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
