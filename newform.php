<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
rno<input type=text name=t1>
name<input type=text name=t2>
marks<input type=text name=t3>
<input type=submit name=s>
<?php
function add()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];

$sql="INSERT INTO student (rno, name1, marks) VALUES($a,'$b',$c)";
//echo $sql;
if ($conn->query($sql)===TRUE)
{

  echo "1 record added";
}

$conn->close();
}
if(isset($_POST['s'])) // submit click
{ 
add();

}
?> 

