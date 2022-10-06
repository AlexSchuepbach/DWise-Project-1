<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OUI</title>
</head>
<body>

    <header>

        <?php

        include_once "includes/navBar.php";



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

</body>
</html>