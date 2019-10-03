<?php
session_start();
if (!isset($_POST["contactSubmit"])) {
    header("Location: /contact.php");
    die();
}

$universityName = $_POST["universityName"];
$courseName = $_POST["courseName"];
$courseCode = $_POST["courseCode"];
$setName = $_POST["setName"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$senderEmail = $_POST["userEmail"];
$comment = $_POST["comment"];

$allowed_file_types = array('txt', 'ppt', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx', 'pdf');
//if file passes three tests: isset, size, and type then its allowance to be attached is changed to true
$file_1_allow_attachment = false;
if (isset($_FILES["file_1"])) {
  $file_1_tmp = $_FILES["file_1"]["tmp_name"];
  $file_1_name = $_FILES["file_1"]["name"];
  if (!($_FILES["file_1"]["size"] > 1000000)) {
      $file_1_ext = pathinfo($file_1_name, PATHINFO_EXTENSION);
      if (!in_array($file_1_ext, $allowed_file_types)) {
        $_SESSION["file_type_not_allowed"] = true;
        header("Location: /contact.php");
      } else {
        $file_1_allow_attachment = true;
      }
  } else {
    // back to contact.php page with file too large error
    $_SESSION["file_too_large"] = true;
    header("Location: /contact.php");
  }
}
use PHPMailer\PHPMailer\PHPMailer;
require_once('PHPMailer-master/src/PHPMailer.php');
require_once('PHPMailer-master/src/SMTP.php');
require_once('PHPMailer-master/src/Exception.php');
$email = new PHPMailer();
$email->isSMTP();
$email->Host = "smtp.gmail.com";
$email->port = 465;
$email->SMTPSecure = 'ssl';
$email->SMTPAuth = true;
$email->Username = "mystudycardssend@gmail.com";  // SMTP username
$email->Password = "Xx918e#2"; // SMTP password
$email->setFrom = 'mystudycardssend@gmail.com';
$email->FromName = $lastName . ", " . $firstName;
$email->Subject = $senderEmail;
$email->Body =
"University Name: " . $universityName . "\n\n"
.
"Course Name: " . $courseName . "\n\n"
.
"Course Code: " . $courseCode . "\n\n"
.
"Set Name: " . $setName . "\n\n"
.
"First Name: " . $firstName . "\n\n"
.
"Last Name: " . $lastName . "\n\n"
.
"Sender Email: " . $senderEmail . "\n\n"
.
"Comment: " . $comment . "\n\n";
$email->addAddress('mystudycardsreceive@gmail.com');
//add attachment if file is set, less than 1mb, and of an allowed type
if ($file_1_allow_attachment) {
  $email->AddAttachment($file_1_tmp, $file_1_name);
  header("Location: /contact_success.php");
  return $email->Send();
  // go to thank you page!
  // ALSO NEED TO SEND EMAIL TO SENDER that says THANK YOU - or just say on thank you page that they
  // will receive an email when their cards have been uploaded...
}
?>
