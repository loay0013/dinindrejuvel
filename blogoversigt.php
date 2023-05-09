
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Blogoversigt</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel='icon' href='img/#' type='image/x-icon' sizes="40x40" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-Beige">
<!--navbar-->
<?php include "includes/nav.php"?>

<h1 class="text-center p-5 mb-5 mt-5 ">
    Læs en masse spændende blogindlæg
</h1>
<!--container til produkter-->
<div class="container flex-row">
    <div class="container">
        <div class="blogs">
            <div class="filter">
                <div class="KategorierSearchId d-flex flex-row container justify-content-center m-5 justify-content-around">
                    <button value="" class="rounded-2 bg-transparent border-3">ALLE POSTS</button>
                    <button value="" class="rounded-2 bg-transparent border-0" data-cat-id="1">SMUDGING</button>
                    <button value="" class="rounded-2 bg-transparent border-0" data-cat-id="2">RØGELSESPINDE</button>
                    <button value="" class="rounded-2 bg-transparent border-0" data-cat-id="3">KRYSTALLER</button>
                    <button value="" class="rounded-2 bg-transparent border-0" data-cat-id="4">SALVIE</button>
                    <button value="" class="rounded-2 bg-transparent border-0" data-cat-id="5">LIVSSTIL</button>
                </div>
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
