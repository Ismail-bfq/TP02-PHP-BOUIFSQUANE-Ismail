<?php
$var1 = 42;
$var2 = "42";
$var3 = true;
$var4 = 15.8;
$var5 = false;
$var6 = null;
echo "<pre>";
echo var_dump ($var1);
echo var_dump ($var2);
echo var_dump ($var3);
echo var_dump ($var4);
echo var_dump ($var5);
echo var_dump ($var6);
echo "</pre>";

$var2 =(int)$var2;
echo var_dump ($var2);
echo "<br>";

$var4 = (int)$var4 ;
echo var_dump ($var4);
echo "<br>";

$var1 =(string)$var1 ;
echo var_dump ($var1);


echo "<br>";
echo var_dump ($var3);
echo "<br>";
echo $var3;

echo "<br>";
echo var_dump ($var5);
echo "<br>";
echo $var5;

echo  var_dump((bool) 0);
echo "<br>";
echo  var_dump((bool) "0");
echo "<br>";
echo  var_dump((bool) "PHP");
echo "<br>";
echo  var_dump((bool) array());
echo "<br>";

?>