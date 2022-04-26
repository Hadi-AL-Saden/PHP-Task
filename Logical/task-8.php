
<?php
$num = 23;
if($num <= 50)
{
    echo $num * 2.5 . "$";
}
else if ($num >50 && $num <= 150)
{
    echo $num * 5 . "$";
}
else if ($num >150 && $num <= 250)
{
    echo $num * 6.2 . "$";
}
else
{
    echo $num * 7.5 . "$";
}
?>