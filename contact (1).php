<html>
<head></head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 24px 26px;
    text-decoration: none;
}

li a:hover {
    background-color: RED;
}
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}
textarea {
    width: 50%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}

.button {
    background-color: #4CAF50; 
    border: none;
    color: orange;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
}

</style>
</head>
<script>
function f(){
var i = document.f1.txt5.value;
if(i==87)
{
alert("WELCOME"+f1.txt1.value+".We have recieved your message. YOUR REDEEM CODE IS 00001");
} 
else
{
alert("YOU ARE ALIEN OR PATHETIC IN MATHS");
}
}
</script>
<body bgcolor="black">
<ul>
 <img src="1.gif" width="150" height="80">
  <li><a class="active" a href="main.html">Home</a></li>
  <li><a href="1.html">About Us</a></li>
  <li><a href="products.html">Product</a></li>
  <li><a href="offers.html">Offers</a></li>
  <li><a href="service.html">Services</a></li>
  <li><a href="contact.html">Contact</a></li>
  
</ul>

<h1> <font color="orange">Contact Us</font></h1>
<br>
<form name="f1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<input type="text" name="txt1" placeholder="Name">
<br><br>
<input type="text"  name="txt2" placeholder="Email address">
<br><br>
<input type="text" name="txt3" placeholder="Contact No.">
<br><br>
<textarea rows="4" cols="50" name="txt4" placeholder="Enter your message for us here" ></textarea>
<br><br>
<img src="11.gif">'
<br><br>
<font color ="white">The answer is </font>
<br>
<input type="text" name="txt5">
<br>
<br>
<button class="button button1" name="sbt" OnClick=f()>Submit</button>
<?php
function add()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=$_POST["txt1"];
$b=$_POST["txt2"];
$c=$_POST["txt3"];
$d=$_POST["txt4"];
$sql="INSERT INTO contact (name, mail, no,mess) VALUES('$a','$b',$c,'$d')";
if ($conn->query($sql)===TRUE)
{

  echo "<font color=red>"."we have recieved your message,thank you for your review"."</font>";
}

$conn->close();
}
if(isset($_POST['sbt'])) 
{ 
add();

}
?> 


</body>
</html>