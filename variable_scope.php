<!--local and global variable scope-->
<?php
$x=5;//global scope
function myTEST()
{
   global $x;
   echo $x;//local scope(it does not print value of x)
}
?>
<!--php also stores all global variable in an array called $GLOBAL[index](accociate array) -->
<?php
$x=5;//global scope
function myTEST()
{
  echo $GLOBAl['X(variable name)'];
}
 mytest();
?>
<!--static variable scope -->
<?php
function myTest()
{
   static $x=0;
   echo $x;
   $x++;
}
myTest();
myTest();
myTest();
?>
<!-- parametric scope -->
<?php
function myTest($x)
{
  echo $x;
}
mytest(5);
?>
