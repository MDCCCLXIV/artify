<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["passwd"];
$confpassword = $_POST["confpasswd"];

// Database connection

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
        $query->close();
    }
    $check_query->close();
    $connection->close();
}
