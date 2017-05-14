<html>
<head>
<font face="verdana" size="3" color="EFFBEF">
 <title>HomePage</title>
 <p> <img src=".\Banner_for_myProject.jpg" alt="LOGO" WIDTH=1350 HEIGHT=100</p> </br>
 <center><b>Hearty Welcome to PVA dataset based Database Project done for CSCI 526, Logged in as a Administrator User</b></br></br>
</head>
<body bgcolor="0B3861">
<?php
print( '<a href="http://localhost/Search_page.php"><font size="5" color="white">Click here to search record based on ControlN</font></a>');
echo "<br/>";
print( '<a href="http://localhost/Insertinfo.php"><font size="5" color="white">Click here to Insert a record</font></a>');
echo "<br/>";
print( '<a href="http://localhost/Updateinfo.php"><font size="5" color="white">Click here to Update a record</font></b></a>');
echo "<br/><br/>";
	  session_start(); 
 if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+ 1;
 else 
    $_SESSION['views'] = 1; 
echo "Page views in Project so far = ". $_SESSION['views']; 
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("h:i:s A - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
$visit = $_COOKIE['lastVisit'];
else
echo "You've got some expired cookies!";
echo "</br>";
echo "Your last visit was - ". $visit;
echo "</br>";
?>
<font size="2" color="red">Demo</font>
</font>
</center>
</html>