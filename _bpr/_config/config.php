<?php
//setting default timezone
date_default_timezone_set('Asia/Jakarta');
session_start();

//konkeksi database
$con = mysqli_connect('localhost', 'root', '' ,'project');
if(mysqli_connect_error()) {
	echo mysqli_connect_error();
}


//fungsi base_url
function base_url($url = null) {
	$base_url = "http://localhost/multi/_bpr";
	if($url != null) {
	   return $base_url. "/".$url;
	} else {
		return $base_url;
	}

}
?>