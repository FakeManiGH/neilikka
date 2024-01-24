<?php
$active = basename($_SERVER['PHP_SELF'],'.php');
function active($sivu,$active){
    return $active == $sivu ? 'active' : '';  
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts.js" defer></script>
    <title><?=$title?></title>
</head>
<body>



<header>
    <div class="ostoskori_container">
        <p><i class="fa fa-shopping-cart" style="font-size: 1.2em;"></i> Ostoskori:</p>
        <?php
        echo "<a class='ostoskori ".active('index',$active). "' href='index.php'>0 tutetta</a>";
        ?>
    </div>
    <h1 class="brand5">NEILIKKA.FI</h1>
</header>

<nav>
<a class="brand5 nav_logo" href="index.php">NEILIKKA.FI</a>
<button class="burger_btn" id="burger_btn" onclick="openMenu()"><i class="fa fa-bars" style="font-size: 1.6em;"></i></button>
<div id="nav_links">
    <?php
    echo "<a class='nav_link ".active('index',$active). "' href='index.php'>Etusivu</a>";
    echo "<a class='nav_link ".active('tuotteet',$active). "' href='tuotteet.php'>Tuotteet</a>";
    echo "<a class='nav_link ".active('myymalat',$active). "' href='myymalat.php'>Myymälät</a>";
    echo "<a class='nav_link ".active('tietoa',$active). "' href='tietoa.php'>Tietoa Meistä</a>";
    echo "<a class='nav_link ".active('ota_yhteytta',$active). "' href='ota_yhteytta.php'>Ota Yhteyttä</a>";
    ?>
</div>
</nav>