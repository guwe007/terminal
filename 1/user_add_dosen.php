<?php

include "../koneksi.php";

$Id_Usergroup_User	= $_POST["Id_Usergroup_User"];
$nama				= $_POST["nama"];
$Username			= $_POST["Username"];
$Password			= $_POST["Username"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);

if($add = mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Username, nama, Password) VALUES ('$Id_Usergroup_User', 
	'$Username', '$nama', '$Password_Hash')")){
	header("Location: user.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>