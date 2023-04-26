<?php
require "settings/init.php";
if(!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;
    if (!empty($file["blogBillede,productBillede1,productBillede2,productBillede3"]["tmp_name"])) {
        move_uploaded_file($file["blogBillede,productBillede1,productBillede2,productBillede3"]["tmp_name"], "uploads/" . basename($file["blogBillede,productBillede1,productBillede2,productBillede3"]["name"]));
    }

    $sql = "INSERT INTO Blog (blogOverskrift,
                  blogDato, 
                  blogKategorier, 
                  blogBillede, blogKortTekst, 
                  blogTekst, blogSeoTitel, 
                  blogSeoDescription, 
                  blogSeoAlt,
                  productBillede1, productNavn1, productLink1,
                  productBillede2, productNavn2, productLink2,
                  productBillede3, productNavn3, productLink3) 
            values(:blogOverskrift, 
                   :blogDato, 
                   :blogKategorier, 
                   :blogBillede, 
                   :blogKortTekst,  :blogTekst,   
                   :blogSeoDescription, :blogSeoAlt, :blogSeoTitel, 
                   :productBillede1, :productNavn1, :productLink1, 
                   :productBillede2, :productNavn2, :productLink2, 
                   :productBillede3, :productNavn3, :productLink3)";
    $bind = [":blogOverskrift" => $data["blogOverskrift"],
        ":blogDato" => $data["blogDato"],
        ":blogKategorier" => $data["blogKategorier"],
        ":blogKortTekst" => $data["blogKortTekst"],
        ":blogTekst" => $data["blogTekst"],
        ":blogSeoTitel" => $data["blogSeoTitel"],
        ":blogSeoDescription" => $data["blogSeoDescription"],
        ":blogSeoAlt" => $data["blogSeoAlt"],
        ":productNavn1" => $data["productNavn1"],":productLink1" => $data["productLink1"],
        ":productNavn2" => $data["productNavn2"],":productLink2" => $data["productLink2"],
        ":productNavn3" => $data["productNavn3"],":productLink3" => $data["productLink3"],
        ":blogBillede"=>(!empty($file["blogBillede"]["tmp_name"]))? $file["blogBillede"]["name"]:NULL,
        ":productBillede3"=>(!empty($file["productBillede3"]["tmp_name"]))? $file["productBillede3"]["name"]:NULL,
        ":productBillede2"=>(!empty($file["productBillede2"]["tmp_name"]))? $file["productBillede2"]["name"]:NULL,
        ":productBillede1"=>(!empty($file["productBillede1"]["tmp_name"]))? $file["productBillede1"]["name"]:NULL];
    $db->sql($sql,$bind,false);


    echo "<body style='font-size: 2rem; background-color: ;'></body>

       <p style='color: white; text-align: center; margin-top: 20%; font-family: Raleway, sans-serif;'>Blog er nu indsat I vores system<p/>
       <div style='display: flex; justify-content: center;'>
       <a style='text-decoration: none' href=''>
       <button style='font-size: 16px; font-weight: 500; color: #1e2125 cursor: pointer; display:flex; border: none; border-radius: 20px; font-family: Raleway, sans-serif; justify-content:center; padding: 10px; height: 60px; width: 200px; background-color: #F2B705FF; align-items: center'>Gå til oversigt</button></a>
       </div>
       ";
    exit;
}
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
    <title>indsat Blog</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/jkzu8jwwcqe5jhv6qvqojegkrhyjq59kgtts7g0966ka00ix/tinymce/6/tinymce.min.js" referrerpolicy="origin">

    </script>

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="bg-kurv">

<form method="post" action="insert.php" enctype="multipart/form-data">

    <div class="row justify-content-center m-0">
        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="Blog Overskrift"><p class="m-0">Blog Overskrift</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[blogOverskrift]"  id="blogOverskrift" placeholder="blogOverskrift" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="Blog Dato"><p class="m-0">Blog Dato</p></label>
                <input class="form-control border-0 rounded-0" type="date" name="data[blogDato]"  id="blogDato" placeholder="Blog Dato" value="">
            </div>
        </div>
        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="blog Kategorier"><p class="m-0">Blog Kategorier</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[blogKategorier]"  id="blogKategorier" placeholder="Blog Kategorier" value="">
            </div>
        </div>


        <div class="col-12 col-md-10">
            <div class="form-group m-2">
                <label for="Blog Billede"> <p class=" m-0">Blog Billede</p></label>
                <input class="form-control border-0 rounded-0" type="file" name="blogBillede"  id="blogBillede" placeholder="Blog Billede" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="Blog Kort Tekst"><p class="m-0">Blog Kort Tekst</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[blogKortTekst]"  id="blogKortTekst" placeholder="Blog Kort Tekst" value="">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group m-2">
                <label for="Blog Tekst"> <p class="m-0"> Blog Tekst</p></label>
                <textarea class="form-control " type="text" name="data[blogTekst]"  id="blogTekst" ></textarea>
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="Blog Seo Titel"><p class="m-0">Blog Seo Titel</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[blogSeoTitel]"  id="blogSeoTitel" placeholder="Blog Seo Titel" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="Blog Seo Description"><p class="m-0">Blog Seo Description</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[blogSeoDescription]"  id="blogSeoDescription" placeholder="Blog Seo Description" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="Blog Seo Alt"><p class="m-0">Blog Seo Alt</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[blogSeoAlt]"  id="blogSeoAlt" placeholder="Blog Seo Alt" value="">
            </div>
        </div>

        <div class="col-12 col-md-10">
            <div class="form-group m-2">
                <label for="productBillede1"> <p class=" m-0">product Billede1</p></label>
                <input class="form-control border-0 rounded-0" type="file" name="productBillede1"  id="productBillede1" placeholder="product Billede1" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="productNavn1"><p class="m-0">product Navn1</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[productNavn1]"  id="productNavn1" placeholder="productNavn1" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="productLink1"><p class="m-0">product Link1</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[productLink1]"  id="productLink1" placeholder="productLink1" value="">
            </div>
        </div>

        <div class="col-12 col-md-10">
            <div class="form-group m-2">
                <label for="productBillede2"> <p class=" m-0">product Billede2</p></label>
                <input class="form-control border-0 rounded-0" type="file" name="productBillede2"  id="productBillede2" placeholder="product Billede2" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="productNavn2"><p class="m-0">product Navn2</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[productNavn2]"  id="productNavn2" placeholder="productNavn2" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="productLink2"><p class="m-0">product Link2</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[productLink2]"  id="productLink2" placeholder="productLink2" value="">
            </div>
        </div>
        <div class="col-12 col-md-10">
            <div class="form-group m-2">
                <label for="productBillede3"> <p class=" m-0">product Billede3</p></label>
                <input class="form-control border-0 rounded-0" type="file" name="productBillede3"  id="productBillede3" placeholder="product Billede3" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="productNavn3"><p class="m-0">product Navn3</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[productNavn3]"  id="productNavn3" placeholder="productNavn3" value="">
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="form-group m-2">
                <label for="productLink3"><p class="m-0">product Link3</p></label>
                <input class="form-control border-0 rounded-0" type="text" name="data[productLink3]"  id="productLink3" placeholder="productLink3" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 mt-5  mb-5">
            <div class="d-flex justify-content-center">
                <button class="form-control btn btn-primary bg-gradient rounded-0 border-0 " type="submit" id="btnsubmit">Submit</button></div>
        </div>
    </div>

</form>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</script>

</body>
</html>