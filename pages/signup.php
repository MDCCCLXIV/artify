<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <main>
        <div class="main">
            <div class="logo">
                <h5>art<span>ify</span> </h5>
            </div>
            <div class="logincontent">
                <form method="POST">
                    <div class="input">
                        <input type="text" name="firstname" placeholder="Firstname" required>
                        <input type="text" name="lastname" placeholder="Lastname" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="passwd" placeholder="Password" required>
                        <input type="password" name="confpasswd" placeholder="Confirm Password" required>
                    </div>
                    <div class="button">
                        <a><input type="submit" value="CREATE ACCOUNT"></a>
                        <div class="or">OR</div>
                        <a href="../pages/login.php"><button type="button">LOG IN</button></a>
                    </div>


                </form>
                <?php
                include("../config/userlogin.php");

                echo $a->registration($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["passwd"], $_POST["confpasswd"]);


                ?>


            </div>

        </div>
    </main>

</body>

</html>