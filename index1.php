<?php


include "FaceDetector.php";
$img=$_POST['img'];
//echo($img);
  

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect($img);
//$detector-> cropFaceToJpeg();
//$js=$detector->toJson();
//$array=$detector->getFace();
//foreach( $array as $a){
	 

//$detector->toJpeg();
$detector->toFace();
 
 ?>
<!-- 
<img src='<?php echo$img;?>' width="900" height="650" alt="/"> -->