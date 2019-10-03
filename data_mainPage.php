<?php
include 'dbconnection.php';
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>mystudycards</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<!-- ____________________________________________________________________________________________________________ -->
<div>
<section class="jumbotron" style="min-height:100%; min-height:100vh; align-items: center; display: flex; background:transparent; !important">
<div class="container">

<center><h3>Please select an action below</h3></center>


<div style="height:50px;"></div>


<div class="row">
  <div class="col-3">
  </div>
   <div class="col-6">
     <center>
       <form action="data_view_data.php" method="post">
         <input type="submit" value="View Data" name="data_view_data_submit" style="height:25px; width:250px; font-size:16px; background-color: transparent;">
       </form>

       <form action="data_insert_new_data.php" method="post">
         <input type="submit" value="Insert New Data" name="data_insert_new_data_submit" style="height:25px; width:250px; font-size:16px; background-color: transparent;">
       </form>

       <form action="data_update_data.php" method="post">
         <input type="submit" value="Update Data" name="data_update_data_submit" style="height:25px; width:250px; font-size:16px; background-color: transparent;">
       </form>

       <form action="data_delete_data.php" method="post">
         <input type="submit" value="Delete Data" name="data_delete_data_submit" style="height:25px; width:250px; font-size:16px; background-color: transparent;">
       </form>
    </center>
    </div>
  <div class="col-3">
  </div>
</div>

</section>
</div>
<!-- ____________________________________________________________________________________________________________ -->

</body>

<!-- ____________________________________________________JQUERY________________________________________________________ -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!-- ____________________________________________________JQUERY________________________________________________________ -->

<footer></footer>
