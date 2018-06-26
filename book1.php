<?php $var1 = $_GET['id'];
$c = mysqli_connect("localhost","root","","parking");
if ($var1 == 1)
{
    $sql = "UPDATE stats SET slot1=1";
    if (mysqli_query($c, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($c);
    }
}
if ($var1 == 2)
{
    $sql = "UPDATE stats SET slot2=1";
    if (mysqli_query($c, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($c);
    }
}
if ($var1 == 3)
{
    $sql = "UPDATE stats SET slot3=1";
    if (mysqli_query($c, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($c);
    }
}
if ($var1 == 4)
{
    $sql = "UPDATE stats SET slot4=1";
    if (mysqli_query($c, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($c);
    }
}
?>
<html>
<head>
<title>Booked</title>
<meta http-equiv="refresh" content="4; URL=http://localhost/parking_system/welcome.php">
<meta name="keywords" content="automatic redirection">
</head>
<body>
  <br> <a href="welcome.php">If your browser doesn't redirect within a few seconds click here to go back home</a>
</body>
