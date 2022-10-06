<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>OUI</title>
</head>
<body>

    <header>

        <?php

        include_once "includes/files/html/navbar.html";



        		$page = "";



		if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }


		if ($page == "Home") {
            include_once "index.php";
        } else if ($page =="Menu"){
            include_once "includes/files/php/menu.php";
        } else if ($page =="Newsletter"){
            include_once "includes/files/php/newsletter.php";
        } else if ($page =="Video"){
            include_once "includes/files/php/video.php";
        }

        ?>

    </header>



<section id="mainPicture>">






    <i class="fa-sharp fa-solid fa-arrow-down"></i>
</section>


<section id="ourSpecialties">

        <h2 class="h2Title">Our Specialties</h2>

    <div class="boxes">
        <h4>Le croissant</h4>
        <img src="includes/pictures/illustrations/illustrations/croissant/illustrations_yellow_croissant.png" alt="croissant">
        <p>Our hand made croissant</p>
    </div>

    <div class="boxes">
        <h4>Le Thé Francais</h4>
        <img src="includes/pictures/illustrations/illustrations/tea/illustrations_yellow_tea.png" alt="tea">
        <p>Tea from France</p>
    </div>

    <div class="boxes">
        <h4>Le café Francais </h4>
        <img src="includes/pictures/illustrations/illustrations/coffee/illustrations_yellow_coffee.png" alt="coffe">
        <p>Hand brewed coffee</p>
    </div>


</section>


</body>
</html>