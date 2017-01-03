


<?php
error_reporting(0);


$today0=getDate();
$today=$today0['year'].'-'.$today0['mon'].'-'.$today0['mday'];

$datey0 = new DateTime($today);
$datey0->modify('-1 day');
 $datey1=$datey0->format('m-d');


$datedy0 = new DateTime($today);
$datedy0->modify('-2 day');
$datedy1=$datedy0->format('dmy');

$url ="http://archives.eenadu.net/".$datey1.'-'.$today0['year']."/ts-cartbig".$datedy1.".jpg";
print_r($url);

$image = $url;
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($image).';base64,'.$imageData;

// Echo out a sample image
echo '<img src="' . $src . '">';
/*

$profile_Image = $url; //image url
$userImage = $datey1.'.'."jpg"; // renaming image
$path = 'eenadu_images/';  // your saving path
$ch = curl_init($profile_Image);
$fp = fopen($path . $userImage, 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec($ch);
curl_close($ch);
fclose($fp);
*/



 



?>