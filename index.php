<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="icon" href="includes/pictures/logos/Logo-02.png" type="image/icon type">
    <script src="https://kit.fontawesome.com/0b4a9ad2b3.js" crossorigin="anonymous"></script>
    <script type="javascript" src="includes/jquery/jquery.js"></script>
    <title>OUI</title>

</head>
<body>
<div id='content'>
    <header>

        <?php

        include_once "includes/files/html/navbar.html";

        ?>

   </header>

<?php


        $page = "";


        if (isset($_GET['page'])) {
            $page = $_GET['page'];

        }


		if ($page == "Home") {
            include_once "includes/files/php/startingPage.php";
        } else if ($page ==="Menu"){
            include_once "includes/files/php/menu.php";
        } else if ($page ==="Newsletter"){
            include_once "includes/files/php/newsletter.php";
        } else if ($page ==="Video"){
            include_once "includes/files/php/video.php";
        }else {
            include_once "includes/files/php/startingPage.php";
        }

        ?>






</div>

</body>
<footer>
    <?php

    include_once "includes/files/html/footer.html";

    ?>
</footer>
</html>