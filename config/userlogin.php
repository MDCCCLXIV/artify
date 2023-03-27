<?php
class User
{
    public $firstname;
    public $lastname;
    public $password;
    public $email;
    public $confpassword;

    function __construct($firstname, $lastname, $email, $password, $confpassword)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->confpassword = $confpassword;
    }

    function login($firstname, $lastname, $password)
    {


        // check if user exists in the database
        // 1.connect to the database.
        $connection = new mysqli('localhost', 'obinchu', '@Ibrahim1864', 'artify');
        if ($connection->connect_error) {
            die('Connection Failed : ' + $connection->connect_error);
        } else {
            echo "connected!";
            // 2.check the database
            $check_query = $connection->prepare("SELECT * FROM users WHERE first_name=? && last_name =? && user_password=?");
            $check_query->bind_param("sss", $firstname, $lastname, $password);
            $check_query->execute();
            $result = $check_query->get_result();

            if ($result->num_rows > 0) {
                // echo "logged in";
                header("Location:../pages/landingpage.php");
                // exit();
            } else {
                echo "Incorrect login credentials";
                // header("Location:../pages/login.php");
                // exit();
            }
        }
    }
    function registration($firstname, $lastname, $email, $password, $confpassword)
    {
        $connection = new mysqli('localhost', 'obinchu', '@Ibrahim1864', 'artify');
        if ($connection->connect_error) {
            die('Connection Failed : ' + $connection->connect_error);
        } else {
            $check_query = $connection->prepare("SELECT * FROM users WHERE first_name = ? && last_name = ? && email=?");
            $check_query->bind_param("sss", $firstname, $lastname, $email);
            $check_query->execute();
            $result = $check_query->get_result();

            if ($result->num_rows > 0) {
                // User already exists
                echo "User  already exists.";
            } else {
                // User does not exist, insert the user
                $query = $connection->prepare("insert into users(first_name,last_name,email,user_password,confirm_password) values(?,?,?,?,?)");
                $query->bind_param("sssss", $firstname, $lastname, $email, $password, $confpassword);
                $query->execute();
                echo "Registered successfully";
                header("Location:../pages/login.php");

                $query->close();
            }
            $check_query->close();
            $connection->close();
        }
    }
}

class Admin extends User
{
    function addUsers($firstname, $lastname, $email, $password, $confpassword)
    {
        $connection = new mysqli('localhost', 'obinchu', '@Ibrahim1864', 'artify');
        if ($connection->connect_error) {
            die('Connection Failed : ' + $connection->connect_error);
        } else {
            $check_query = $connection->prepare("SELECT * FROM users WHERE first_name = ? && last_name = ? && email=?");
            $check_query->bind_param("sss", $firstname, $lastname, $email);
            $check_query->execute();
            $result = $check_query->get_result();

            if ($result->num_rows > 0) {
                // User already exists
                echo "User already exists.";
            } else {
                // User does not exist, insert the user
                $query = $connection->prepare("insert into users(first_name,last_name,email,user_password,confirm_password) values(?,?,?,?,?)");
                $query->bind_param("sssss", $firstname, $lastname, $email, $password, $confpassword);
                $query->execute();
                echo "User added successfully";
                // header("Location:../pages/login.php");

                $query->close();
            }
            $check_query->close();
            $connection->close();
        }
    }
}

$a = new User($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $_POST["confpasswd"]);
$b = new Admin($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $_POST["confpasswd"]);
