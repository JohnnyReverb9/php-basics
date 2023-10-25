<pre>

<?php

$fruits = [
    "blue" => ["blueberry"],
    "red" => ["strawberry", "raspberry", "apple (red)", "litchi"],
    "black" => ["blackberry"],
    "yellow" => ["citrus", "orange", "melon"],
    "white" => ["coconut"],
    "green" => ["apple (green)", "watermelon"]
];

foreach ($fruits as $color => $fruit)
{
    echo "$color: " . implode(", ", $fruit) . "<br>";
}

?>

</pre>

