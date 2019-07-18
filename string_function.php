<!-- using diffrent php predefine function like strlen(),srtoupper(),strtolower(),strcmp() -->
<?php
$x="I am learning php";
$y="I am learning php from mysirg.com";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php $l1=strlen($x); ?>
  <h1> <?php echo "$x has $l1 chracter"; ?></h1>
  <?php $l1=strtolower($x); ?>
  <h1> <?php echo "$x,$l1 "; ?></h1>
  <?php $l1=strtoupper($x); ?>
  <h1> <?php echo "$x,$l1 "; ?></h1>
  <?php $l1=strcmp($x,$y); ?>
  <h1> <?php echo "$x, $y , $l1 "; ?></h1>
  <?php $l1=strcmp($y,$x); ?>
  <h1> <?php echo "$x, $y , $l1 "; ?></h1>
</body>
</html>
