<?php

 
include "FaceDetector.php";
$img=$_POST['img'];
 
  

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect($img);
$detector->toJpeg();

//$detector-> cropFaceToJpeg();
//$js=$detector->toJson();
//$array=$detector->getFace();
//foreach( $array as $a){
	 

 ?>
