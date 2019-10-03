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
<body style="margin:0px; padding:0px;">

<!-- ____________________________________________________________________________________________________________ -->
<div class="container">
<center>

  <div class="row">
    <div class="col-md-12">
      <div style="height:50px;"</div>
    </div>
  </div>

<div class="row">
    <div class="col-md-1">
      <button type="button" id="data_view_data_getUniversities" style="height:30px; width:130px; font-size:12px; background-color: transparent">View Universities</button>
    </div>

    <div class="col-md-1">
    </div>

    <div class="col-md-1">
      <button type="button" id="data_view_data_getCourses" style="height:30px; width:130px; font-size:12px; background-color: transparent">View Courses</button>
    </div>

    <div class="col-md-1">
    </div>

    <div class="col-md-1">
      <button type="button" id="data_view_data_getProfessors" style="height:30px; width:130px; font-size:12px; background-color: transparent">View Professors</button>
    </div>

    <div class="col-md-1">
    </div>

    <div class="col-md-1">
      <button type="button" id="data_view_data_getChP" style="height:30px; width:130px; font-size:12px; background-color: transparent">View ChP</button>
    </div>

    <div class="col-md-1">
    </div>

    <div class="col-md-1">
      <button type="button" id="data_view_data_getSets" style="height:30px; width:130px; font-size:12px; background-color: transparent">View Sets</button>
    </div>

     <div class="col-md-1">
     </div>

    <div class="col-md-1">
      <button type="button" id="data_view_data_getTerms" style="height:30px; width:130px; font-size:12px; background-color: transparent">View Terms</button>
    </div>
</div>


<div class="row">
  <div class="col-md-12">
    <div style="height:10px;"></div>
      <div id="loading" style="height:15px;">loading...</div>
      <div id="loading_offset" style="height:15px;"></div>
    <div style="height:240px;"></div>
  </div>
</div>

</center>
</div>

<!-- ajax data inflation -->
<center>
<div id="data_view_data_inflation"></div>
</center>
<!-- ____________________________________________________________________________________________________________ -->

</body>

<!-- ____________________________________________________JQUERY________________________________________________________ -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!-- ____________________________________________________JQUERY________________________________________________________ -->

<!-- ____________________________________________________________________________________________________________ -->
<script>
$(document).ready(function(){

  $("#loading").css("visibility", "hidden");
  $("#loading_offset").css("visibility", "visible");

  $(document).ajaxStart(function(){
    $('#loading').css("visibility", "visible");
    $("#loading_offset").css("visibility", "invisible");
   });

   $(document).ajaxComplete(function(){
     $('#loading').css("visibility", "hidden");
     $("#loading_offset").css("visibility", "visible");
   });

   $("#data_view_data_getUniversities").click(function() {
     $.ajax({
       url: "data_view_data_getUniversities.php",
       method:"POST",
       data:{query:""},
       success:function(data){
           $("#data_view_data_inflation").fadeIn();
           $("#data_view_data_inflation").html(data);
       }
     })
  });

  $("#data_view_data_getCourses").click(function() {
    $.ajax({
      url: "data_view_data_getCourses.php",
      method:"POST",
      data:{query:""},
      success:function(data){
          $("#data_view_data_inflation").fadeIn();
          $("#data_view_data_inflation").html(data);
      }
    })
 });

 $("#data_view_data_getProfessors").click(function() {
   $.ajax({
     url: "data_view_data_getProfessors.php",
     method:"POST",
     data:{query:""},
     success:function(data){
         $("#data_view_data_inflation").fadeIn();
         $("#data_view_data_inflation").html(data);
     }
   })
});

$("#data_view_data_getChP").click(function() {
  $.ajax({
    url: "data_view_data_getChP.php",
    method:"POST",
    data:{query:""},
    success:function(data){
        $("#data_view_data_inflation").fadeIn();
        $("#data_view_data_inflation").html(data);
    }
  })
});

$("#data_view_data_getSets").click(function() {
  $.ajax({
    url: "data_view_data_getSets.php",
    method:"POST",
    data:{query:""},
    success:function(data){
        $("#data_view_data_inflation").fadeIn();
        $("#data_view_data_inflation").html(data);
    }
  })
});

$("#data_view_data_getTerms").click(function() {
  $.ajax({
    url: "data_view_data_getTerms.php",
    method:"POST",
    data:{query:""},
    success:function(data){
        $("#data_view_data_inflation").fadeIn();
        $("#data_view_data_inflation").html(data);
    }
  })
});

});
 </script>
<!-- ____________________________________________________________________________________________________________ -->

<footer></footer>
