<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server


$db = mysql_select_db("gogreen", $connection); // Selecting Database from Server


if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$priority = $_POST['priority'];
$emailcopy = $_POST['copy'];
$category = $_POST['human'];
$message = $_POST['message'];

if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into contactus(userName, emailId, priority, isEmail, isRobot, contactMessage, category) values ('$name', '$email', '$priority', '$emailcopy', '$category', '$message', '$category')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); 
?>