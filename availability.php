<!DOCTYPE html>
<?php
$c = mysqli_connect("localhost","root","","parking");
$qr = "SELECT * FROM `stats`";
$qry = mysqli_query($c,$qr);
$b=mysqli_fetch_array($qry);
$qr1 = "SELECT * FROM irstats";
$qry1 = mysqli_query($c,$qr1);
$b1 = mysqli_fetch_array($qry1);
if ($b['slot1'] == 0 && $b1['slot1']==0) {
  echo "slot 1 is free <br>";
  $bgcol1='green';
}
else {
  $bgcol1='#ff0000';
}
if ($b['slot2'] == 0 && $b1['slot2']==0) {
  echo "slot 2 is free <br>";
  $bgcol2='green';
}
else {
  $bgcol2='red';
}
if ($b['slot3'] == 0 && $b1['slot3']==0) {
  echo "Slot 3 is free <br>";
  $bgcol3='green';
}
else {
  $bgcol3='red';
}
if ($b['slot4'] == 0 && $b1['slot4']==0) {
  echo "Slot 4 is free <br>";
  $bgcol4='green';
}
else {
  $bgcol4='red';
}
?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Availability</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <style>

   .butt {
     width: 80%;
     padding: 50px;
   }
    .slot1 {
      background-color: <?php echo $bgcol1; ?>
    }
    .slot2 {
      background-color: <?php echo $bgcol2; ?>
    }
    .slot3 {
      background-color: <?php echo $bgcol3; ?>
    }
    .slot4 {
      background-color: <?php echo $bgcol4; ?>
    }
    a {
      color: red;
    }
    </style>
   <body>
     <div class="container">
       <button type="button" class="butt slot1">Slot 1</button> <a href="book1.php?id=1">click here to book slot 1</a><br>
       <button type="button" class="butt slot2">Slot 2</button><a href="book1.php?id=2">click here to book slot 2</a> <br>
       <button type="button" class="butt slot3">Slot 3</button><a href="book1.php?id=3">click here to book slot 3</a> <br>
       <button type="button" class="butt slot4">Slot 4</button><a href="book1.php?id=4">click here to book slot 4</a> <br>
     </div>
   </body>

 </html>
