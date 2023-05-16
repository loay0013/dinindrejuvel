
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Blogoversigt | Din Indre Juvel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Få eksklusiv indsigt i verdenen af Spurtiul på vores blog, og  læs en masse spændende blogindlæg ">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel='icon' href='img/SoMeicone.png' type='image/x-icon' sizes="40x40" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-Beige">
<!--navbar-->
<?php include "includes/nav.php"?>
<!--tekst-->
<h1 class="container ps-5 mb-5 mt-5 p-md-5 ">
    Læs en masse spændende blogindlæg
</h1>
<!--container til blog-->
<div class="container flex-row">
    <div class="container">
        <div class="blogs">
            <div class="filter mb-5">
                <!--filter-->
                <section class="KategorierSearchId d-flex flex-md-row flex-column container justify-content-center m-md-5 justify-content-around">
                    <div class="col-12 col-md-4 flex-row justify-content-md-around justify-content-start d-flex ">
                    <button value="" class="rounded-2  bg-transparent border-0 active border-active">ALLE POSTS</button>
                    <button value="" class="rounded-2  bg-transparent border-0 border-active" data-cat-id="1">SMUDGING</button></div>
                    <div class="col-12 col-md-4 flex-row justify-content-md-around justify-content-start d-flex ">
                    <button value="" class="rounded-2  bg-transparent border-0 border-active" data-cat-id="2">RØGELSESPINDE</button>
                    <button value="" class="rounded-2  bg-transparent border-0 border-active" data-cat-id="3">KRYSTALLER</button></div>
                    <div class="col-12 col-md-4 flex-row justify-content-md-around d-flex justify-content-start">
                    <button value="" class="rounded-2  bg-transparent border-0 border-active" data-cat-id="4">SALVIE</button>
                    <button value="" class="rounded-2  bg-transparent border-0 border-active" data-cat-id="5">LIVSSTIL</button></div>
                </section>
            </div>
            <div class="items">
            </div>
        </div>
    </div>
</div>

<!--footer-->
<?php include "includes/footer.php"?>
<!--bootstrap js script-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--script import fra js-->
<script type="module">
    import blogs from "./js/blog.js";
    const blog = new blogs();
    blog.init();
</script>
</body>
</html>
