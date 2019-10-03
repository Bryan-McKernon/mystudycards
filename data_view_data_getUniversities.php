<?php
include 'dbconnection.php';

if (isset($_POST["query"])) {

  $dataTable = "<table border='1' cellpadding='5' style='font-size:12px; width:80%;'>";

  $getUniversities = "SELECT * FROM University";
  $getUniversities_result = $conn->query($getUniversities);
  if ($getUniversities_result->num_rows > 0) {
    while ($getUniversities_var = $getUniversities_result->fetch_assoc()) {
      $dataTable  .=  "<tr>";
      $dataTable  .=  "<th>".$getUniversities_var["University_ID"]."</th>";
      $dataTable  .=  "<th>".$getUniversities_var["University_Name_1"]."</th>";
      $dataTable  .=  "<th>".$getUniversities_var["University_Name_2"]."</th>";
      $dataTable  .=  "<th>".$getUniversities_var["University_Name_3"]."</th>";
      $dataTable  .=  "<th>".$getUniversities_var["University_Name_4"]."</th>";
      $dataTable  .=  "</tr>";
    }
  } else {
    echo "<h2>No data found</h2>";
  }

  $dataTable .= "</table>";
  echo $dataTable;
}
?>
