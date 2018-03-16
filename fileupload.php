<?php
// echo "<pre>";
// print_r($_FILES);
// die;
error_reporting(0);
@ini_set('display_errors', 0);

$sourcePath = $_FILES['file']['tmp_name'];
$targetPath = "uploads/" . round(microtime(true)) . '.' . @end($_FILES['file']['name']);
// echo $targetPath;
@move_uploaded_file($sourcePath, $targetPath);
// echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
// echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
// echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
// echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
echo @$targetPath;
// print_r $_FILES['file'];
?>