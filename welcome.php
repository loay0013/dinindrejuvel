<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel='icon' href='img/SoMeicone.png' type='image/x-icon' sizes="40x40" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body class="bg-Beige">
<div class="d-flex justify-content-center container p-5">
    <img class="w-50" src="img/dijlogonavbarb.png" alt="logo">
</div>

<h1 class="my-5 text-center">Hej <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> til din indre juvel system</h1>

<div class="d-flex justify-content-center container ">
    <div class="d-flex justify-content-center">
        <a href="edit.php">
            <button class="rounded-5 bg-Gul text-Beige border-0 px-5 py-2 m-3">blog</button>
        </a>
    </div>
    <div class="d-flex justify-content-center">
        <a href="insert.php">
            <button class="rounded-5 bg-Gul text-Beige border-0 px-5 py-2 m-3">Ny Blog</button>
        </a>
    </div>
</div>

<div class="d-flex justify-content-center" >
    <a href="logout.php" class="btn btn-danger ml-3">Log ud</a>
</div>
</body>
</html>