<?php
// Initialize the session
session_start();
require_once "settings/config.php";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!--select produkter fra sql-->
<?php
require "settings/init.php";
if(!empty($_GET["type"])){
    if($_GET["type"] == "slet"){
        $id = $_GET["id"];
        $db->sql("DELETE FROM blog WHERE BlogId =:BlogId",[":BlogId" =>$id], false);
        header("location: edit.php");

    }
}

if(!empty($_GET["id"])) {
    if($_GET["id"] == "rediger") {
        $id = $_GET["id"];
        $db->sql("SELECT * FROM blog WHERE BlogId = :BlogId", [":BlogId"=>$BlogId]);
        header("location: update.php");
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
    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Slet</title>
    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="bg-Beige mx-14">
<!-- Her skal sidens indhold ligge -->
<div class="d-flex justify-content-center container p-5">
    <img class="w-50" src="img/dijlogonavbarb.png" alt="logo">
</div>

<div class="d-flex justify-content-end  mx-14 ">
    <div class="d-flex justify-content-center">
        <a href="blogoversigt.php">
            <button class="rounded-5 bg-Gul text-Beige border-0 px-5 py-2 m-3">blog</button>
        </a>
    </div>
    <div class="d-flex justify-content-end">
        <a href="insert.php">
            <button class="rounded-5 bg-Gul text-Beige border-0 px-5 py-2 m-3">Ny</button>
        </a>
    </div>
    <div class="d-flex justify-content-end container m-3" >
        <a  href="logout.php" class="btn btn-danger">Log ud</a>
    </div>
</div>

    <?php
        foreach ($blog as $blogs){
    ?>
<div class="d-flex justify-content-center flex-column">
    <div class="bg-Grøn1 rounded-4 col-6 p-3 container mt-5">
        <div class="row gx-0 d-flex flex-column flex-md-row">
            <!--produktNavn og produktbeskrivelse-->
            <div class="col-12 d-flex align-items-center">
                <div class="mx-4 mx-md-5 mt-5">
                    <div>
                        <p class="text-Beige">
                            <?php
                            echo $blogs->blogDato
                            ?>
                        </p>
                        <h1 class="text-Beige">
                            <?php
                            echo $blogs->blogOverskrift
                            ?>
                        </h1>
                        <p class="mt-4 text-Beige">
                            <?php
                            echo $blogs->blogKortTekst
                            ?>
                        </p>
                    </div>
                        <div class="d-flex">
                            <div>
                                <button class="rounded-5 bg-Gul  border-0 px-5 py-2 m-3 text-Beige text-decoration-none" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                 Slet
                                </button>
                            </div>

                            <div>
                                <button class="rounded-5 bg-Gul  border-0 px-5 py-2 m-3">
                                    <a class="text-Beige text-decoration-none" href="update.php?type=rediger&id=<?php echo $blogs->BlogId?>">Rediger</a></button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body bg-Blå2">
                <p class="text-Beige text-center">Er du sikker på, at du vil fjerne dette?</p>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <a href="edit.php"><button type="button" class="btn btn-red" data-bs-dismiss="modal" aria-label="Close">Nej</button></a>
                <a href="edit.php?type=slet&id=<?php echo $blogs->BlogId?>" class="btn btn-Gul">Ja</a>
            </div>
        </div>
    </div>
</div>
                <?php
                      }
                    ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const deleteModalElem = document.querySelector('#deleteModal');
    const modalConfirm = deleteModalElem.querySelector('.modalConfirm');
    const deleteModal = new bootstrap.Modal(deleteModalElem);

    document.querySelectorAll('.deleteBtn').forEach(deleteBtn => deleteBtn.addEventListener('click', () => {
        modalConfirm.href = deleteBtn.dataset.url;
        deleteModal.show();
    }));
</script>
</body>
</html>
