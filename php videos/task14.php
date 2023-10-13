<?php
// phpinfo(); // full php version info about server,
//var_dump($_SERVER); // full info about server

//echo $_SERVER['HTTPS']; // nothing or off -- https if not enabled
//echo $_SERVER['HTTP_HOST']; // localhost:63342
//echo $_SERVER['REQUEST_URI']; // full url path after domain
//echo $_SERVER['HTTP_USER_AGENT']; // server OS

if ($_GET['source'])
{
    $link = explode("?source=", $_SERVER["REQUEST_URI"]);
    $redir = "http://" . $_SERVER['HTTP_HOST'];
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $redir);
    exit();
}



