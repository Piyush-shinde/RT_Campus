<?php

$str = readline("Enter a string: "); 

$Elements = explode(" ", $str);

echo "Splited String: \n";

foreach ($Elements as $i) 
{
    echo "$i\n";
}
?>
