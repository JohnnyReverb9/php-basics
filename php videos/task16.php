<?php
session_start();
// sessions n cookie stores info for a long time
// cookie can store info for an installed time
// meanwhile session store info when client's browser is on

$username = "Alex";
//setcookie("username", $username, time() + 180); // cookie living for a N sec
//var_dump($_COOKIE);
//echo $_COOKIE["username"];
//setcookie("username", $username, time() - 180); // deletes cookie

// session must be started at the beginning of code

$_SESSION["username"] = $username;

session_abort(); // завершает сессию без сохранения данных. Таким образом, сохраняются исходные значения сессии.
//session_destroy(); // deletes all session data
//unset($_SESSION["username"]); // deletes session
if (isset($_SESSION["username"]) == "Alex") echo "Session started";

