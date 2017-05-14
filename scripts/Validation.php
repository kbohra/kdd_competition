<html>

<head>
<font face="verdana" size="3" color="EFFBEF">
 <title>Validation</title>
 <p> <img src=".\Banner_for_myProject.jpg" alt="LOGO" WIDTH=1350 HEIGHT=100</p> </br>
 <center>
  <body bgcolor="0B3861">
 <b> Authentication of credentials is in progress.............<b></br>
</head>
<?php
$user_in=$_POST['user'];
$pass_in=$_POST['pass'];
if(($user_in=='kushal') && ($pass_in=='kushal@2u'))
{
echo "</br>";
           echo "<font color='Green'>Credentials have been sucessfully verified, You will be redirected to project home page in next 5 seconds</font>";
           header( 'refresh:5;url=Homepage.php' );
           //print( '<a href="http://localhost/Homepage.php"><font size="5" color="white">If not redirected to project page click here</font></a>');
		  echo "</br>";
}
else
{
echo "</br>";
		   echo "<font color='Red'>Incorrect details have been provided, You will be redirected in 5seconds back to try again</font>";
           header( 'refresh:5;url=Mainpage.php' );
           //print('<a href="http://localhost/Mainpage.php"><font size="5" color="white">If not redirected click here</font></a>');
		   echo "</br>";
		   }
  
echo "<br/>";
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
echo "</br>";
?>
<font size="2" color="red">Demo</font>
</font>
</center>
</html>