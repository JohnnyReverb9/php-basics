<?php
// switch-case

$x = 6;

switch($x)
{
    case 0: echo "zero"; break;
    case 3:
        echo "three";
        break;
    case 6: echo "six"; break;
    case 9:
        $res = "123";
        echo $res;
        break;
    default:
        echo "Oops!";
        break; // break in default is optional
}

// if case ends without break -> next case will complete automatically