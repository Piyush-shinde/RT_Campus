<?php
$number = readline("Enter a number: ");
$sum=0;
for($i=0;$i<strlen($number);$i++)
{
    $sum=$sum+$number[$i];
}

echo "Sum of digits: $sum\n";
?>
