<?php
const SERVERNAME = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "DFnDKcmsdka9928";
const DB_NAME = "auth";

$fullname = $pass = $password = $email = $login = "";
$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
/*
$sql = "update `users` set `login` = 'Kraasava' where `fullname` = 'Ivan'";
if ($connect->query($sql))
    echo "succeed";
else
    echo "error";
*/
// output one row from DB
$sql = "select * from `users` where `fullname` = 'John'";
$output = $connect->query($sql);
//var_dump($output);
$user = $output->fetch_assoc();
//print_r($user);

foreach ($user as $key => $val)
{
    //echo "$key : $val<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$sql = "select * from `users`";
$res = $connect->query($sql);

for ($user = array(); $row = $res->fetch_assoc(); $user[] = $row)
{
    //print_r($user);
}

if (isset($_POST["addUser"]))
{
    $fullname = $_POST["fullname"] ?? NULL;
    $login = $_POST["login"] ?? NULL;
    $email = $_POST["email"] ?? NULL;
    $pass = hash("sha256", $_POST["password"]) ?? NULL;
    $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
    $sql = "insert into `users` (`fullname`, `login`, `email`, `password`) values ('$fullname', '$login', '$email', '$pass')";
    $connect->query($sql);
    $connect->close();
    unset($_POST["addUser"]);
}

if (isset($_GET["change"]))
{
    $id = $_GET["change"] ?? NULL;
    $fullname = $user[$id]["fullname"] ?? NULL;
    $login = $user[$id]["login"] ?? NULL;
    $email = $user[$id]["email"] ?? NULL;
    $password = $user[$id]["password"] ?? NULL;
    $idBase = $user[$id]["id"] ?? NULL;
}

?>

    <form action="#" method="post">
        <input type="text" name="fullname" placeholder="Enter name" value="<?= $fullname?>">
        <input type="text" name="login" placeholder="Enter login" value="<?= $login?>">
        <input type="text" name="email" placeholder="Enter e-mail" value="<?= $email?>">
        <input type="password" name="password" placeholder="Enter password" value="<?= $password?>">
        <input type="submit" value="add user" name="addUser">
    </form>

<?php
unset($_POST["addUser"]);
foreach ($user as $key => $val)
{
    echo "<p>$val[id] | $val[fullname] | $val[login] | $val[email] | $val[password] | $val[avatar] <a href='?change=$key'>   Select</a> </p>";
}



?>