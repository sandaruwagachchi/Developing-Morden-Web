<?php
$num=rand(1,5);
switch($num)
{
    case 1:$image="images.jpeg";
    break;
    case 2:$image="images (1).jpeg";
    break;
    case 3:$image="images (2).jpeg";
    break;
    case 4:$image="download.jpeg";
    break;
    case 5:$image="download (1).jpeg";
};
echo "Random Image:<image src=$image height=100; width=100>";