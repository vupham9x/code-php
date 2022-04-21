<h1 style="text-align:center;">Convert JPG/PNG Image to WEBP Using PHP</h1>

<?php
$file = 'MINI-BANNER-2.jpg';
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '.code-php/output.webp';
imagewebp($content,$output);
imagedestroy($content);
echo '<h4>Output Image Saved as '.$output.'</h4>';
?>
  