<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['b1']))
{

    $pnr=$_POST['pnr'];
    $feed=$_POST['S1'];
    
 
    
    $query = "UPDATE seat SET feedback = '".$feed."' where 	PNR = '".$pnr."'";
    $result= mysqli_query($conn,$query);
              $echo = 'Submitted Succesfully';
              echo "<script type='text/javascript'>alert('$echo');</script>"; 
              }  
?>
       
<html>
<head>
<title>Feedback</title>  
</head> 
<body>      
<div style =" width:767px; height:600px; margin-right: auto; margin-left: auto; background-color:#c1ff87; position:relative; top:40px; box-shadow: 0 10px 6px -1px #98c66d;">
<br><h1><font color= blue><center>So,how we had served... </center></h1></font>
<form method="POST" action="feedback.PHP"><center>
  <h3>PNR NO:</h3>
  <input type="text" name="pnr" size="35"><br><br>
  <h3>Feedback:<br><br><h3>
  <textarea rows="16" name="S1" cols="73"></textarea><br><br>
  <input type="submit" name="b1" value="submit" >
 </center>
</form>
</body>
</html>