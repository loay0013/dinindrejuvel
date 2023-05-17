
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<title> Hjem | Din Indre Juvel </title>
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
    <meta name="description" content="Opdag den helhedsorienterede tilgang til livet gennem vores holistiske blog, der udforsker spiritualitet,
    sundhed, miljø og relationer.">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel='icon' href='img/SoMeicone.png' type='image/x-icon' sizes="40x40" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-Beige">
<!--navbar-->
<?php include "includes/nav.php"?>
<!--hedder-->
<header>
		<div class="row m-0">
			<div class="col-md-6 px-0 ">
                <!--img1-->
                <div class=" hero1">
                    <!--box-->
                    <div class="bg-Beige mx-md-5 mx-3 p-md-5 p-3 d-flex flex-column box-hero ">
                        <p class="pb-3">LIVSSTIL</p>
                        <h1>Se de seneste
                            spritituelle trends i 2023 </h1>
                        <p class="pt-3">
                            Læs de nyeste blogindlæg omkring trends i
                            2023 her.
                        </p>
                        <a class="text-decoration-none" href="blogoversigt.php">
                        <button class="rounded-5 bg-Gul text-Beige border-0 d-flex w-text mt-4 p-1 px-4">Læs blogindlægget
                            <img class="pt-1 ps-2" src="img/arrowup 2.svg"  alt="arrowup">
                        </button>
                        </a>
                    </div>
                </div>
			</div>
            <!--img2-->
			<div class="col-md-6 px-0">
                <div class="hero2"></div>
			</div>
		</div>
</header>
<!-- text section med img-->
<section>
	<div class=" d-flex justify-content-center flex-md-row flex-column my-md-6">
		<div class="container-about  d-flex flex-md-row flex-column justify-content-md-start col-12 align-items-center ">
			<div class="col-md-6 flex-column col-12 d-flex flex-md-row">
				<div class="d-flex flex-column">
					<h2 class="mx-5 mt-5 mt-md-0">Holistisk Blog</h2>
					<br><p class="mx-5">Vores holistiske blog handler typisk om tilgangen til livet, der man ser på mennesket som en helhed, der er forbundet med alt omkring sig.
						En holistisk tilgang kan anvendes inden for mange forskellige områder, fx sundhed, miljø, relationer og spiritualitet.
						Vi kommer ind på spirituelle og holistiske ritualer, begreber og produkter. </p>
				</div>
			</div>
				<div class="col-md-6 col-12  flex-column flex-md-row img-bg align-items-center d-flex mt-5 mt-md-0">
				</div>
			</div>
		</div>
	</section>
<!--img-->
<div class="d-flex justify-content-md-end justify-content-center p-d">
	<img class="img-flower1" src="img/flower%201.svg" alt="Flower">
</div>


<!--blog-->
<section class="d-flex flex-md-row flex-column justify-content-md-around container mt-m">
	<div class="d-flex flex-column">
        <div>
            <h3 class="mb-4">Seneste Post</h3>
        </div>

        <div>
            <?php
            require "settings/init.php";
            $blog = $db->sql("SELECT * FROM blog ORDER BY blogId DESC LIMIT 1");
            ?>
            <div>
                <?php foreach ($blog as $blog) { ?>
                <div class="col-md-10 col-12 gap-4">
                    <a  href="blog.php?BlogId=${items.BlogId}" class="text-decoration-none text-dark d-md-flex ">
                        <div class="">
                            <img class="wh-img1" src="uploads/<?php echo $blog->blogBillede;?>" alt="<?php echo $blog->blogSeoAlt;?>">
                            <div class="card-body">
                                <h4 class="card-title mt-3 mb-5"><?php echo $blog->blogOverskrift ?></h4>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


        <div class="d-flex flex-md-row flex-column col-md-6 col-12 mt-md-5">
        <?php
           $blog = $db->sql("SELECT * FROM blog ORDER BY blogId DESC LIMIT 4 OFFSET 1");
        ?>
            <div class="d-flex flex-md-wrap flex-md-row flex-column col-12 mt-md-4 pt-2">
                <?php foreach ($blog as $blog) { ?>
                    <div class="col-md-5 col-12">
                        <div>
                        <a  href="blog.php?BlogId=${items.BlogId}" class="text-decoration-none text-dark d-md-flex ">
                            <div class="">
                                <img class="wh-img3" src="uploads/<?php echo $blog->blogBillede;?>" alt="<?php echo $blog->blogSeoAlt;?>">
                                <div class="card-body">
                                    <h4 class="card-title mt-3 mb-5"><?php echo $blog->blogOverskrift ?></h4>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</section>


<!--section med SoMe og webshop-->
<section>
	<div class="d-flex justify-content-md-start justify-content-center p-d1">
		<img class="img-flower1" src="img/flowerblue-1.svg" alt="flower">
	</div>
    <div class="bg-Blå1 d-flex flex-md-row flex-column">
        <div class="container col-12 col-md-5 col-xl-4 bg-Grøn2 d-flex flex-column flex-lg-row my-5 z-index box grøn-box" >
            <img class="wh-img m-md-3" src="img/DinindreJuvel.png" alt="Røgelsespinde">
            <div class="d-flex flex-column p-3 justify-content-center">
                <h4 class="text-Beige d-flex"> Din Indre Juvel webshop</h4>
                <p class="text-Beige"> Find vores produkter her.</p>
                <button class="rounded-5 bg-Blå2 text-Beige border-0 d-flex w-text mt-4 p-1 px-4">Gå til Din Indre Juvel
                    <img class="pt-1 ps-2" src="img/arrowup 2.svg"  alt="arrowup">
                </button>
            </div>
        </div>
        <div class="container col-12 col-md-5  col-xl-4 bg-Blå2 my-5 d-flex flex-lg-row flex-column box " >
            <div class="d-flex flex-column flex-lg-row">
                <div class="d-flex flex-column">
                    <img class="wh-img3 mt-3 m-md-3" src="img/IMG_0308%20kopier.webp" alt="Palo Santo">
                    <div class="d-flex flex-row justify-content-around m-4">
                        <a href="">
                            <img src="img/instaicon.svg" alt="insta icon">
                        </a>
                        <a href="">
                            <img src="img/fbicone.svg" alt="fb icon">
                        </a>
                        <a href="">
                            <img src="img/Icon%20simple-tiktok.svg" alt="tiktok icon">
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-lg-end justify-content-lg-end ms-5 mb-3">
                    <h3>Følg os</h3>
                    <p class="text-Beige p-3">- og få spændende<br> nyheder</p>
                    <button class="rounded-5 bg-Rosa1 text-Beige border-0 d-flex w-text mt-4 p-1 px-4">Kontakt os
                        <img class="pt-1 ps-2" src="img/arrowup 2.svg"  alt="arrowup">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>



<!--footer-->
<?php include "includes/footer.php"?>
<!--bootstrap js script-->
<script type="module">
    import blogs from "./js/blog.js";
    const blog = new blogs();
    blog.init();
</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
