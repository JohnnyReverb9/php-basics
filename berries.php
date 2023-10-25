<pre>

<?php

$fruits = [
    "blue" => ["blueberry"],
    "red" => ["strawberry", "raspberry", "apple", "litchi"],
    "black" => ["blackberry"],
    "yellow" => ["citrus", "orange"],
    "white" => ["coconut", "litchi"]
];

foreach ($fruits as $color => $fruit)
{
    echo "$color: " . implode(", ", $fruit) . "<br>";
}

?>

</pre>

