<html>
<head>
<font face="verdana" size="3" color="EFFBEF">
 <title>MainPage</title>
 <p> <img src=".\Banner_for_myProject.jpg" alt="LOGO" WIDTH=1350 HEIGHT=100</p> </br>
 <center><b>Hearty Welcome, Please validate your credentials to Enter into Database Project Operations</b></br></br>
 All the details you enter here are case sensitive, so please enter correctly!!**
</head>
<body bgcolor="0B3861">
 <form action="Validation.php" method="post">
     Username: <input type="text" name="user" /><br />
	 Password: <input type="password" name="pass" /><br />
    <input type="submit" name="submit" value="SignIn" />
 </form>
 <font size="2" color="red">Note:-All the pictures,data here used for this project are just for learning and use of concepts, Its nothing to do with any copyright violations or commercial usage.</font>
 </br>
 <?php
 session_start(); 
 if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+ 1;
 else 
    $_SESSION['views'] = 1; 
echo "Page views in Project so far = ". $_SESSION['views']; 
echo "<br/>";
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("h:i:s A - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
$visit = $_COOKIE['lastVisit'];
else
echo "You've got some expired cookies!";
echo "Your last visit was - ". $visit;
?>
</font>
 </center>
</html>