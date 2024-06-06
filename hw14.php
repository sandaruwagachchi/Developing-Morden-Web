<?php
$num=rand(1,4);
switch($num)
{
    case 1:$image_file="IMG_20230827_085404.jpg";
    break;
    case 2:$image_file="IMG_20230827_090417.jpg";
    break;
    case 3:$image_file="IMG_20230827_092414.jpg";
    break;
    case 4:$image_file="IMG_20230827_094224.jpg";
    break;

}
echo "Random Image:<img src=$image_file width=200>";
?>