<?php

$Values = array("My", "name", "is", "Piyush");

$result = implode(" ", $Values);

echo "Array Elements:\n";
foreach ($Values as $i) 
{
    echo "$i \n";
}

echo "\nString is :\n";
echo $result;
?>
