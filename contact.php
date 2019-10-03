<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ________________________Google Analytics___________________________ -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130809913-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-130809913-1');
      </script>
    <!-- ________________________Google Analytics___________________________ -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Study Cards | Upload StudyCards</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="maincss.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>


<body style="  background-image: url('dust_scratches.png');">
  <!-- ____________________________________________________NAVBAR_________________________________________________________ -->
  <nav class="navbar navbar-light navbar-toggleable-md py-0">
    <button class="navbar-toggler navbar-toggler-right" style="color:black" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="http://mystudycards.com/">MY   <img src="MyStudyCards.png" class="MyStudyCardsImg img-fluid" alt="MyStudyCards"></a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link py-0" href="http://mystudycards.com/">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link py-0" href="http://mystudycards.com/about.html">About Us</a>
          <a class="nav-item nav-link py-0 active" href="http://mystudycards.com/contact.php">Upload StudyCards</a>
    </div>
  </div>
  </nav>
  <!-- ____________________________________________________NAVBAR_________________________________________________________ -->
  <div class="container createPage">
    <div class="row">
      <div class="col-12">
            <center><h1 style="color:#097622; font-weight: bold;">Send Us Your Material! </h1>
            <h3 style="color:#097622; font-weight: bold;">We will upload it for you! </h3></center>

        </div>
    </div>

    <div class="row">
      <div class="col-12">
          <p style="height:20px;"></p> <!-- space -->

          <form method="post" align="center" action="contact_process.php" enctype="multipart/form-data">

            <label>What is the name of your University?</label><br>
            <input type="text"  placeholder= "University Name" name="universityName" id="universityName" style="width:32.5vw;  min-width:270px;" required> <br><br>

            <label for="name">What is the name of your Course? <br>(Ex: Intro to Business Programming)</label><br>
            <input type="text"  placeholder= "Course Name" name="courseName" id="courseName" style="width:32.5vw;  min-width:270px;" required> <br><br>

            <label for="name">What is your Course Code? <br>(Ex: BUS 092)</label><br>
            <input type="text"  placeholder= "Course Code" name="courseCode" id="courseCode" style="width:32.5vw;  min-width:270px;" required> <br><br>

            <label for="name">What is the name of your Set(s)? <br>(Ex: Chapter 1, Chapter 2, etc.) </label><br>
            <input type="text"  placeholder= "Set Name" name="setName" id="setName" style="width:32.5vw;  min-width:270px;" required> <br><br>


            <?php
              session_start();
              $no_error = true;
              if (isset($_SESSION["file_too_large"])) {
                echo "<h4 id='contactfileerror'>Sorry! File too large</h4>";
                $no_error = false;
                unset($_SESSION["file_too_large"]);
              }

              if (isset($_SESSION["file_type_not_allowed"])) {
                echo "<h4 id='contactfileerror'>Sorry! File type not allowed</h4>";
                $no_error = false;
                unset($_SESSION["file_type_not_allowed"]);
              }

              if ($no_error) {
                echo "<label for='upload'>Upload your material here!</label>";
              }
             ?>
            <br>
            <label class="custom-file" style="width:27vw;  min-width:200px;">
            <input type="file" name="file_1" id="file_1" class="custom-file-input" required>
            <span class="custom-file-control" align="left" style="overflow: hidden;">Choose file...</span>
            </label><br><br>

            <input type="text" placeholder= "First Name" name="firstName" id="firstName" style="width:16vw; min-width:130px;" required>
            <input type="text" placeholder= "Last Name" name="lastName" id="lastName" style="width:16vw; min-width:130px; margin-left:2px;" required>

            <br><br>

            <input type="email"  placeholder= "Email" name="userEmail" id="email" style="width:32.5vw;  min-width:270px;" required>

            <br><br>

            <label for="comment">Add your comments here!</label><br>
            <textarea name="comment" id="" align="center" cols="35" rows="7" style="width:32.5vw; min-width:270px;" ></textarea>

            <br><br>

            <input type="submit" name="contactSubmit" value="Submit" style="font-family: 'Source Sans Pro', sans-serif; background-color:#7AEDA4; color:#097622 ; font-weight: bold; width:32.5vw; min-width:270px; border-radius:2px;">
          </form>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="space"></div>
    </div>
    </div>
</div>


<!-- ____________________________________________________JQUERY________________________________________________________ -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!-- ____________________________________________________JQUERY________________________________________________________ -->

<center>
<div class="footer-container" style="background-color:black; ">
  <div class="row">
    <div class="col-xs-4 col-sm-4">
      <div><a href="#" id="BacktoTop" style="color:white;font-family: 'Source Sans Pro', sans-serif;font-size:14px;">Back to top</a></div>
    </div>
    <div class="col-xs-4 col-sm-4">
      <div style="color:white; font-size:14px;">&copy; 2018  mystudycards</div>
    </div>
    <div class="col-xs-4 col-sm-4">
    </div>
  </div>
</div>
</center>

</body>
</html>
