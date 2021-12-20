<?php
header ("Content-type: image/png");
$image = imagecreate(30,30);
$blanc = imagecolorallocate($image, 0, 0, 0);
imagepng($image);


$heure=strftime("%c");
$ip=@$_SERVER['REMOTE_ADDR'];

$stat="
Votre mail a ete lu :
Date $heure
Adresse IP : $ip
";
mail ("buchezpierric@gmail.com", "On a lus votre mail !", "$stat");
?>

