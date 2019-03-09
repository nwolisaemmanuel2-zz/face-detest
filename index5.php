
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Face Detection</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <style type="text/css">
    .ank{
      color:white;
    }

    </style>
  </head>

  <body>
 
    <div class="navbar navbar-dark bg-dark">
      <div class="container d-flex justify-content-between">
        <h1 class="ank">ANKIT's LAB</a></h1>
   
        </button>
      </div>
    </div>

     <?php

error_reporting(0);
        if(move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']))
          {
             echo "<br><br><div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'> 
  File upload successfully</h4>
  
   
</div>";
             $ank=$_FILES['file']['name'];
                 $_SESSION['name']=$ank;
                 $str='upload/'; 
            //header('location:test.php');
          }
          
?>

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Face Detection Using php</h1>
        <br><br>
        <form action="index.php" method="post" enctype="multipart/form-data">
        <p class="lead text-muted">
        	
        	
        <input type="file"   name="file" class="form-control" placeholder="Select an Image" required autofocus>
        		
        	
        </p>
        <p>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Upload Image</button>
         
        </p>
        </form>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">
        <div class="row">

           
            <?php $str='upload/';  ?>      

        <div class="card">
            <form action="index2.php" method="post" enctype="multipart/form-data">
        <p class="lead text-muted">
          
           <img src="upload/<?php echo$ank?>" width="300" height="200" alt="Card image cap">
        <input type="hidden"   name="img" class="form-control" value="<?php echo$str.$ank; ?>" >
            
          
        </p>
        <p>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Crop Face </button>
         
        </p>
        </form>
          </div>


        <div class="card">
            <form action="index3.php" method="post" enctype="multipart/form-data">
        <p class="lead text-muted">
          
           <img src="upload/<?php echo$ank?>" width="300" height="200" alt="Card image cap">
        <input type="hidden"   name="img" class="form-control" value="<?php echo$str.$ank; ?>" >
            
          
        </p>
        <p>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Face Detection</button>
         
        </p>
        </form>
          </div>

           <div class="card">
            <form action="index1.php" method="post" enctype="multipart/form-data">
        <p class="lead text-muted">
          
           <img src="upload/<?php echo$ank?>" width="300" height="200" alt="Card image cap">
        <input type="hidden"   name="img" class="form-control" value="<?php echo$str.$ank; ?>" >
            
          
        </p>
        <p>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Face Filter</button>
         
        </p>
        </form>
          </div>
 
  
        </div>

      </div>
    </div>

    <footer class="text-muted">
      <div class="container">
         
        <p><H5>Developed by<a href="../../"> Ankitkumar Singh</a></H5></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script>window.jQuery || document.write('<script src="jquery.min.js"><\/script>')</script>
    <!-- <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script> -->
   <!--  /*<script>
      $(function () {
        Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
      });
    </script>*/ -->
    <script src="bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
