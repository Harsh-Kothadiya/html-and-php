<?php
$n=$_POST["name"];
$p=$_POST["pass"];

$name=fopen("21name.txt","w");
fwrite($name,$n);
fclose($name);

$pass=fopen("21pass.txt","w");
fwrite($pass,$p);
fclose($pass);

echo "your account created";
?>