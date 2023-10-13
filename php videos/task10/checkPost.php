<?php
// Array ( [username] => John [email] => asdasdasd@gmail.com [password] => asdasdasdasd [message] => Work?? )
// print_r($_POST);
$name = $_POST["username"];
$email = $_POST["email"];
$pass = sha1($_POST["password"]);

if (trim($name) == "")
    echo "Name is empty!";
elseif (strlen($name) <= 1)
    echo "Name is not existing";
elseif (trim($email) == "" || trim($pass) == "" || trim($_POST["message"]) == "")
    echo "Enter all data";
else
{
    /*
    $_POST["password"] = sha1($_POST["password"]);
    //echo "<h1>Data:</h1><p>$name</p><p>$email</p><p>$pass</p><p>$_POST[message]</p>";
    echo "<h1>Data:</h1>";
    foreach ($_POST as $key => $value)
    {
        echo "<p>$value</p>";
    }
    */

    header("Location: /task10/aboutPost.php"); // usually after header following exit;
    exit;
}