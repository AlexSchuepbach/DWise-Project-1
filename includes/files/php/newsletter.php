<!DOCTYPE html>
<html>
    <head>
        <title>Newsletter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="newsstyle.css" type="text/css">
    </head> 

    <body>

        <div id="newsContainer">

            <nav>
                <ul class="navBar">
                    <li class="navItem"><a href="index.php?page=Home">Starting Page</a></li>
                    <li class="navItem"><a href="index.php?page=Menu">Menu</a></li>
                    <li class="navItem"><a href="index.php?page=Newsletter">Newsletter</a></li>
                    <li class="navItem"><a href="index.php?page=Video">Video</a></a></li>
                </ul>
            </nav>

            <!-- Main content -->
            <div id="formContainer">

                <!-- Text in the main box -->
                <div id="newsText">
                    <h1>Get updates on the cafe</h1>
                    <p>Sign up for news updates and a chance to win a free item off of our menu!</p>
                </div>

                <!-- Validate form input, output message that information was received -->
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
                        $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
                        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

                        if (empty($fname) || empty($lname)){
                            echo "Please enter your name";
                        } else if ($email == FALSE) {
                            echo "Please enter a valid email address.";
                        } else {
                            echo "Thank you for signing up " . $fname . "!";
                        }
                    }
                ?>

                <!-- Input form -->
                <form name="signUp" action="index.php?page=Newsletter" method="POST">

                    <input type="text" name="fname" id="fname" placeholder="First name">

                    <input type="text" name="lname" id="lname" placeholder="Last name">

                    <input type="email" name="email" id="email" placeholder="Email address">

                    <!-- Submit button -->
                    <p><input type="submit" value="Sign up"></p> 
                </form>
            </div>
        </div>
    </body>

</html>