# face-detection
php facedeation project.

1) create a new folder upload
2) create a folder Exception and cut paste this "NoFaceException.php" file to the new folder "Exception"


<b><h3>Features</h3></b>  
1. Detect face from jpg images of any size and quality.  
2. Crop Face from images   
3. Apply filters on faceial area.  

<b><h3>Supported Methods</h3></b>  
1)toFace()

2)toJpge()

3)faceDetect('img name or path');

4)cropFaceToJpeg()// crop the image 





<b><h3>Example for face detection </h3></b>  
'''
<?php  


include "FaceDetector.php";

$img=$_POST['img']; //image name  

$detector = new svay\FaceDetector('detection.dat');

$detector->faceDetect($img);

$detector->toFace();   

?>  
'''
