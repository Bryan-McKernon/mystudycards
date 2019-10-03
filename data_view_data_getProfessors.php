<?php
include 'dbconnection.php';

if (isset($_POST["query"])) {

  $dataTable = "<table border='1' cellpadding='5' style='font-size:12px; width:80%;'>";

  $getUniversities = "SELECT * FROM Professor";
  $getUniversities_result = $conn->query($getUniversities);
  if ($getUniversities_result->num_rows > 0) {
    while ($getUniversities_var = $getUniversities_result->fetch_assoc()) {
      $dataTable  .=  "<tr>";
      $dataTable  .=  "<th>".$getUniversities_var["Professor_ID"]."</th>";
      $dataTable  .=  "<th>".$getUniversities_var["Professor_Email"]."</th>";
      $dataTable  .=  "<th>".$getUniversities_var["Professor_Password"]."</th>";
      $dataTable  .=  "<th>".$getUniversities_var["Professor_First_Name"]."</th>";
      $dataTable  .=  "<th>".$getUniversities_var["Professor_Last_Name"]."</th>";
      $dataTable  .=  "</tr>";
    }
  } else {
    echo "<h2>No data found</h2>";
  }

  $dataTable .= "</table>";
  echo $dataTable;
}
?>
