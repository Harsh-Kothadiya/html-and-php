<?php
$n=$_POST["name"];
$p=$_POST["pass"];

$name;
$pass;

$fname=fopen("21name.txt","r");
$name=fread($fname,filesize("21name.txt"));
fclose($fname);

$fpass=fopen("21pass.txt","r");
$pass=fread($fpass,filesize("21pass.txt"));
fclose($fpass);

if( ($n==$name) && ($p==$pass) )
	echo "login successfuly";

else if( ($n!=$name) && ($p!=$pass) )
	echo "login unsuccessfuly";


else if($n!=$name)
	echo "user name is in correct ! ";
else if($p!=$pass)
	echo "password is in correct ! ";

?>