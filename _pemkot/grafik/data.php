<?php
$con = mysqli_connect('localhost', 'root', '' ,'project');
if(mysqli_connect_error()) {
	echo mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM tb_kecamatan") or die (mysqli_error($con));

$rows = array();
while($r = mysqli_fetch_array($result)) {
    $row[0] = $r[1];
    $row[1] = $r[2];
    array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);

mysqli_close($con);
?>

