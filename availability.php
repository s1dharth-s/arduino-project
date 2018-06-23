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
    echo "slot 1 is free\n";
  $bgcol=green;
}
else {
  $bgcol=red;
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
    #slot1 {
      background-color: <?php $bgcol ?>
    }
    </style>
   <body>
     <div class="container">
       <button type="button" class="btn btn-primary btn-block" id="slot1">Slot 1</button>
       <button type="button" class="btn btn-primary btn-block">Slot 2</button>
       <button type="button" class="btn btn-primary btn-block">Slot 3</button>
       <button type="button" class="btn btn-primary btn-block">Slot 4</button>
   </body>
 </html>
