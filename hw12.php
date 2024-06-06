<?php
$cars=array(
    array("Volver",18,12),
    array("BMW",20,18),
    array("Benz",18,16),
    array("GTR",25,17)
);
for($i=0;$i<4;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $cars[$i][$j]." ";
    }
    echo "<br>";
}