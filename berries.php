<pre>

<?php

$berries = [
    "black" => ["blackberry", "blueberry"],
    "red" => ["strawberry", "raspberry"]
];

foreach ($berries as $color => $berry)
{
    echo "$color: " . implode(", ", $berry) . "<br>";
}

?>

</pre>

