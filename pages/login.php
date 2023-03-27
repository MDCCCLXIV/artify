<!-- 
// require_once("../config/userlogin.php");

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- LOG IN -->

    <main>
        <div class="main">
            <div class="logo">
                <h5>art<span>ify</span> </h5>
            </div>
            <div class="logincontent">
                <form action="" method="POST">
                    <div class="input">
                        <input type="text" name="firstname" placeholder="firstname" required>
                        <input type="text" name="lastname" placeholder="lastname" required>
                        <input type="password" name="passwd" id="passwd" placeholder="Password" required>
                    </div>

                    <div class="button">
                        <a href="../pages/landingpage.php"><input type="submit" value="LOG IN"></input></a>
                        <a href="#" class="forgot">Forgot Password ?</a>


                    </div>


                </form>

                <?php
                include("../config/userlogin.php");

                echo $a->login($_POST["firstname"], $_POST["lastname"], $_POST["passwd"]);

                ?>


            </div>

        </div>
    </main>


</body>

</html>