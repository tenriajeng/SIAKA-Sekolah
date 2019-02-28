<?php
$k=0;$p=0;$i=0;$j=0;

for($i=2 ; $i<=100 ;$i++)
{

    $j=1;
    $k=0;
    while($j<=$i)
    {
        if( ($i % $j) == 0)
        {
             $k++;

        }
         $j++;
    }
    if($k == 2)
    {
         $p++;

    }
}
echo $p."<br>";
echo $i."<br>";
echo $k."<br>";
echo $j."<br>";
?>