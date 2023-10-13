<?php
/*
$file = fopen("text.txt", "a"); // we can combine modes like wr
// also if we open file, we SHOULD close it later (memory leaks may be)

fwrite($file, "\nOh no, not mem i've never lost control\n");

fclose($file);
*/

$fname = "text.txt";

$file = fopen($fname, "r");

$content = fread($file, filesize($fname)); // while reading file we should know size of file

fclose($file);

echo "<pre>" . $content . "</pre>";

file_put_contents("x.txt", "DATADATADATA"); // inserts text in file
echo file_get_contents("x.txt"); // get content from file

echo file_exists("x.txt"); // checks file existing

// rename("x.txt", "a.txt");
// unlink("a.txt"); // deletes file by name

echo __FILE__; // file dir
echo "<br>";
echo "<br>";
echo "<br>";
echo fileperms(__FILE__); // returns file permissions
chmod("x.txt", 0777); // 0000 -- nobody can use it, 0777 -- all can use it