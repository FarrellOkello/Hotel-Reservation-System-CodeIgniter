<?php
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, Content-Language, Authorization');
header('Access-Control-Expose-Headers: Authorization');

# CONFIG
define('_DB_HOST', 'localhost');
define('_DB_NAME', 'fronthotels');
define('_DB_USER', 'root');
define('_DB_PASS', '');

# DB CONNECT
$connection = mysqli_connect(_DB_HOST,_DB_USER,_DB_PASS) or die 
('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
$db = mysqli_select_db($connection,_DB_NAME ) or die ('request "Unable to select database."');

# ACTION
$keys = isset($_REQUEST['keys'])?$_REQUEST['keys']:array();
if (!is_array($keys)){
	$keys = array($keys);
}
$keys = array_filter($keys);
// $key = isset($_REQUEST['key']);
//keep trying 
$bookid = isset($_POST['bookid']);
// $json    =  file_get_contents('php://input');
// $obj     =  json_decode($json);
// $bookid = filter_var($obj->bookid, FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
$key = $bookid;

# RESULT
$unavailable = array();
if (empty($keys)){
	$sql = "SELECT * FROM roombooking WHERE book_id = $key";
	$sql_result = mysqli_query ($connection,$sql) or 
	die ('request "Could not execute SQL query" '.$sql);
	while ($row = mysqli_fetch_assoc($sql_result)) {
		$unavailable[] = $row['checkin'];
		// $unavailable[] = $row['checkout'];
	}
}
echo(json_encode($unavailable));
exit();