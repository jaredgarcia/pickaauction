<?php
include '../database/db_connection.php';
if (isset($_POST['key'])) {

	$userID = $conn->real_escape_string($_POST['userID']);
    	if ($_POST['key'] == 'getUser') {
    		$sql = $conn->query("SELECT * FROM users WHERE id='$userID'");
    		$data = $sql->fetch_array();
    		exit(json_encode($data));

    	}
}




?>