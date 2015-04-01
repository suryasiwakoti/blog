<?php

//$con = mysql_connect("localhost", "root", "sanjeevs");
//$db = mysql_select_db("cms"


/*$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'sanjeev';
$db = "cms";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
*/
$db = new db();
//var_dump($db);die;
//$db->connect();
$conn = $db->connect();
//var_dump($conn);die;
$results = $db->select("select * from student");
var_dump($results);die;






$sql = "select * from student";
$retval = mysqli_query($conn, $sql);

 while ($row = mysqli_fetch_assoc($retval)) {
  echo "ID :{$row['id']}  <br> " .
  "Name: {$row['name']} <br> " .
  "--------------------------------<br>";
  }
/*$sql = "insert into student (username,password,name, address)values('final','adminsss','mac','china')";
$retvals = mysqli_query($conn, $sql);


$sql = "update student  set address = 'korea' where id= '9'";
$retvals = mysqli_query($conn, $sql);

$sql = "delete from student";
$retvals = mysqli_query($conn, $sql);*/
//var_dump($retval);

?>
