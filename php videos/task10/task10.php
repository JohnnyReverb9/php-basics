<?php
$name = "Main";
// file inclusion
// directive require
// require "blocks/header.php";
// if required file is not existing the error will be raised
// require "contacts.php"; // site has stopped

// directive include
// include "contacts.php"; // site will not stop working

// include_once, require_once -- requires file only one time
include_once "blocks/header.php";
// include_once "blocks/header.php";
// include "blocks/header.php"; // outputs header two times
// include "blocks/header.php";

// title renaming
?>
<h1>Main</h1>
<?php
print_r($_GET);
// http://localhost:63342/basics/task10/task10.php?age=45&name=Jhn\
// Array ( [age] => 45 [name] => Jhn\ )
require "blocks/footer.php";
?>