<?php

function abc()
{
    return (1 ||  2 ||  3) && 4 && 5;
}

print_r(abc());