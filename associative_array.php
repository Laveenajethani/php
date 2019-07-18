<!-- array value display using associative array -->
<?php
$x=array("first"=>10,"second"=>20,"third"=>30,"forth"=>40,"fifth"=>50,"sixth"=>60)
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<h2>order of list</h2>
  <ul>
   <?php
    foreach ($x as $v) 
    {
   ?>
   <li><?php echo $v; ?></li>
    <?php
     }
    ?> 
  </ul>
</body>
</html>
