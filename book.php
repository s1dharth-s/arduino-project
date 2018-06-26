<!DOCTYPE html>
<?php
$c = mysqli_connect("localhost","root","","parking");
$qr = "SELECT * FROM `stats`";
$qry = mysqli_query($c,$qr);
$b=mysqli_fetch_array($qry);
$qr1 = "SELECT * FROM irstats";
$qry1 = mysqli_query($c,$qr1);
$b1 = mysqli_fetch_array($qry1);
$qr2 = "SELECT * from rfid";
$qry2 = mysqli_query($c,$qr2);
$b2 = mysqli_fetch_array($qry2);
$qr3 = "SELECT * from charge";
$qry3 = mysqli_query($c,$qr3);
$b3 = mysqli_fetch_array($qry3);
  if ($b['slot1'] == 0 && $b1['slot1']==0) {
    echo "slot 1 is free\n";
    $sql = "UPDATE stats SET slot1=1";

    if (mysqli_query($c, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($c);
    }
  }
  elseif ($b['slot2'] == 0 && $b1['slot2']==0) {
    echo "slot 2 is free and booked\n";
    $sql = "UPDATE stats SET slot2=1";

    if (mysqli_query($c, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($c);
    }
  }
  elseif ($b['slot3'] == 0 && $b1['slot3']==0) {
    echo "Slot 3 is free and booked\n";
    $sql = "UPDATE stats SET slot3=1";

    if (mysqli_query($c, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($c);
    }
  }
  elseif ($b['slot4'] == 0 && $b1['slot4']==0) {
    echo "Slot 4 is free\n";
    $sql = "UPDATE stats SET slot4=1";

    if (mysqli_query($c, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($c);
    }
  }
  else {
    echo "No slot is free";
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking Page</title>
  </head>
  <body>
    <p>rfid detected:<?php echo $b2['id']; ?>
    <h2>Current availability:</h2>
	<table align="center" border="1px" >
    <?PHP
    $c = mysqli_connect("localhost","root","","parking");
    $qr = "SELECT * FROM `stats`";
    $qry = mysqli_query($c,$qr);
    while($b=mysqli_fetch_array($qry))
    { ?>
      <tr>
      <td><?PHP echo  $b['slot1'];?></td>
      <td><?PHP echo  $b['slot2'];?></td>
      <td><?PHP echo  $b['slot3'];?></td>
      <td><?PHP echo  $b['slot4'];?></td>
      </tr>
    <?PHP } ?>
    </table>
    <?php echo "<br> <br> Total cost: ₹";
     echo $b3['cost']; ?>
</body>
</html>
