<?php
$db = mysqli_connect("localhost", "root", "", "pergudangan_db");

if(!$db){
	echo "Unable to connect Database, contact Administrator";
	exit;
}