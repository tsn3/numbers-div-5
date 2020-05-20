<?php
$y=5;
$sum=0;
for ($i=20;$i<=45;$i++)
{
    if (fmod($i,$y)==0)
    {
        echo "Numbers divisible by 5 is:". $i."<br/>";
    $sum+=$i;
    }
}
echo "Their sum is equal". $sum;
?>


