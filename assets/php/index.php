
<?php
void flush ( void );
//this is for getting todays date
error_reporting(0);
function tdate()
{
$today0 = getdate();
$today['mday']=($today0['mday']-1);
$today['mon']=($today0['mon']);
$today['year']=($today0['year']);
if(strlen($today['mon'])==1){

    $fday['mon']='0'.$today['mon'];
  
}

if(strlen($today['mday'])==1){

    $fday['mday']='0'.$today['mday'];
      $pday['mday']='0'.($today['mday']-1);

}

$fday['year']=$today['year'];
$ffday=$fday['mon'].'-'.$fday['mday'].'-'.$fday['year'];//final first date that is required
return $ffday;

}



function pdate(){            //previous date
$today0 = getdate();
$today['mday']=($today0['mday']-1);
$today['mon']=($today0['mon']);
$today['year']=($today0['year']);
$pday=$today;
if(strlen($today['mon'])==1){

    $fday['mon']='0'.$today['mon'];
  
}


if(strlen($today['mday'])==1){

    $fday['mday']='0'.$today['mday'];
      $pday['mday']='0'.($today['mday']-1);

}
$fsyear=substr($today['year'], -2);
$fpday=$pday['mday'].$fday['mon'].$fsyear;
return $fpday;
}
printf(pdate());
printf('*************');
print(tdate());




$url ="http://archives.eenadu.net/".tdate()."/ts-cartbig".pdate().".jpg";
$name =basename($url);
printf('*************');
print_r($url);


$image = $url;
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($image).';base64,'.$imageData;

// Echo out a sample image
echo '<img src="' . $src . '">';

?>