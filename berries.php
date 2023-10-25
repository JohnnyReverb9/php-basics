<pre>

<?php

$fruits = [
    "blue" => ["blueberry"],
    "red" => ["strawberry", "raspberry", "apple", "litchi"],
    "black" => ["blackberry"],
    "yellow" => ["citrus", "orange", "melon"],
    "white" => ["coconut"],
    "green" => ["apple", "watermelon"]
];

foreach ($fruits as $color => $fruit)
{
    echo "$color: " . implode(", ", $fruit) . "<br>";
}

?>

</pre>

