<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>This is the top that never changes</h1>
  </body>
</html>

<?php
if (isset($_GET["pg"])){
  $page = $_GET["pg"];

if ($page === "1") {
  echo "page is one";
}


if ($page === "2") {
  echo "page is two";
}






} else {
  echo "yain't got no code there";
}
?>
