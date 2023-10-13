<?php
// strings
$str = "hello";
// concatenate
echo "var: " . $str;
// or (only in double quotes)
echo "<br>var: $str"; // var: hello
// in single quotes:
echo '<br>var: $str'; // var: $str
// it takes twice memory time to process " than '

// also you can echo html tags
echo "<br><input type='text'>";

// strlen -- string length
$len = strlen($str);
echo "<br>$len<br>";
// trim -- removes spaces before and after string
$notTrimmed = "      str       ";
echo trim($notTrimmed);
// to lower register
$up = "HELLO";
echo strtolower($up); // for non-cyrillic symbols
echo "<br>";
$rus = "ПРИВЕТ";
echo mb_strtolower($rus); // if string contains cyrillic symbols
// it works similarly with upper register
// strtoupper();
// mb_strtoupper();
// you can use all funcs at one time:
echo "<br>" . strtoupper(trim("     some      "));
// string to hash
$pass = "qwerty1234";
$hashedPass = md5($pass);
echo "<br>$pass or $hashedPass or " . sha1($pass);