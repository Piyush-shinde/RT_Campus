<?php

$input = readline("Enter the values in array: ");

$Values = explode(" ", $input);

$uniqueArray = array();

foreach ($Values as $i) 
{
    if (!in_array($i, $uniqueArray)) 
    {
        $uniqueArray[] = $i;
    }
}

echo "Array Elements before :\n";

foreach ($Values as $i) 
{
    echo "$i\n";
}

echo "\nUnique Array after:\n";

foreach ($uniqueArray as $i) 
{
    echo "$i\n";
}
?>
