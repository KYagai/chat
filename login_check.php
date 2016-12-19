<?php
$dsn = 'mysql:dbname=rpgdb;host=127.0.0.1';
$user = 'root';
$pw = 'H@chiouji1';

$sql = 'SELECT * FROM chat';

$dbh = new PDO($dsn,$user,$pw);


$id = $_REQUEST['id'];
$password = $_REQUEST['password'];

if($name == null){
  include("ER001.php");
}
else if($name != null){
  include("WC201.php");
}
?>
