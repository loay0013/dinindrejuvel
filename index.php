
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">

	<title>Sigende titel</title>

	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-Beige">
<!--navbar-->
<?php include "includes/nav.php"?>

<div class="">
	<div class="hero">
		<div class="row m-0">
			<div class="col-md-6 px-0">
				<img src="img/pexels-cottonbro-studio-3737576.jpg" alt="">
			</div>
			<div class="col-md-6 px-0">
				<img src="img/pexels-cup-of-couple-6963132.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<div>
	<div class=" d-flex justify-content-center flex-md-row flex-column my-md-6">
		<div class="container-about  d-flex flex-md-row flex-column justify-content-md-start col-12 align-items-center ">
			<div class="col-md-6 flex-column col-12 d-flex flex-md-row">
				<div class="d-flex flex-column">
					<h2 class="">Holistisk Blog</h2>
					<br><p>Vores holistiske blog handler typisk om tilgangen til livet, der man ser på mennesket som en helhed, der er forbundet med alt omkring sig.
						En holistisk tilgang kan anvendes inden for mange forskellige områder, fx sundhed, miljø, relationer og spiritualitet.
						Vi kommer ind på spirituelle og holistiske ritualer, begreber og produkter. </p>
				</div>
			</div>
				<div class="col-md-6 col-12  flex-column flex-md-row img-bg align-items-center d-flex mt-5 mt-md-0">
				</div>
			</div>
		</div>
	</div>

<div class="d-flex justify-content-md-end justify-content-center p-d">
	<img class="img-flower1" src="img/flower%201.svg" alt="">
</div>



<div class="d-flex flex-md-row flex-column justify-content-md-around container mt-m">
	<div class="d-flex flex-column">
	<div>
		<h3 class="mb-4">Seneste Post</h3>
	</div>
	<div class="">
        <?php
        require "settings/init.php";
        $blog = $db->sql("SELECT * FROM blog ORDER BY blogId DESC LIMIT 1");
        ?>
		<div class="">
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
                            <img class="wh-img" src="uploads/<?php echo $blog->blogBillede;?>" alt="<?php echo $blog->blogSeoAlt;?>">
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
    </div>



<div>
	<div class="d-flex justify-content-md-start justify-content-center p-d1">
		<img class="img-flower1" src="img/flower%201.svg" alt="">
	</div>
<div class="bg-Blå1 d-flex flex-md-row flex-column">
	<div class="container col-12 col-md-4 bg-Grøn1 d-flex flex-column flex-md-row my-5 z-index  " >
		<img class="wh-img" src="img/Mission-img.png">
		<div class="d-flex flex-column">
			<h4> Din Indre Juvel webshop</h4>
			<p> Din Indre Juvel webshop</p>
			<button></button>
		</div>
	</div>
	<div class="container col-12 col-md-4 bg-Blå2 my-5 d-flex flex-md-row flex-column " >
		<div class="d-flex flex-column flex-md-row">
			<img class="wh-img" src="img/Mission-img.png">
			<div class="d-flex flex-row">
				<img src="img/Icon%20simple-tiktok.svg">
				<img src="img/Icon%20simple-tiktok.svg">
				<img src="img/Icon%20simple-tiktok.svg">
			</div>
			<div class="d-flex flex-column">
				<h3>Følg os</h3>
				<p>Instagram</p>
				<button></button>
			</div>
		</div>
	</div>
</div>
</div>



<!--footer-->
<?php include "includes/footer.php"?>
<!--bootstrap js script-->
<script type="module">
    import blogs from "./js/blog.js";
    const blog = new blogs();
    blog.init();
</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/active.js"></script>
</body>
</html>
