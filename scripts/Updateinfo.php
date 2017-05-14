<html>
<head>
<font face="verdana" size="3" color="EFFBEF">
 <p> <img src=".\Banner_for_myProject.jpg" alt="LOGO" WIDTH=1350 HEIGHT=100</p> </br>
 <center><b>Enter the new Domain to make an update into database!</b></br></br>
   <body bgcolor="0B3861">
 <title>Details for updation of the Database</title>
    </head>
     <body>
     <form action="Updatepage.php" method="post">
	 <table>
	  <tr>
	  <td align="right"><font color="white">CONTROLN:</td>
      <td align="left"><input type="text" name="CONTROLN" /></td>
	  </tr>
	  <tr>
	  <td align="right"><font color="white">DOMAIN:</td>
      <td align="left"><input type="text" name="DOMAIN" /></td>
	  </tr>
	    <tr>
	    <td align="right" colspan="2"><input type="submit" name="submit" value="Submit to Update now" /></td>
	  </tr>
	  </table>
    </form>
	</body>
<?php
   echo "<br/>";
   print( '<a href="http://localhost/Homepage.php"><font size="5" color="white">Click here to go to Home page</font></a>');
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