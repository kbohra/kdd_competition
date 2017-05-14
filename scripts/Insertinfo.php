<html>
<head>
<font face="verdana" size="3" color="EFFBEF">
 <p> <img src=".\Banner_for_myProject.jpg" alt="LOGO" WIDTH=1350 HEIGHT=100</p> </br>
 <center><b>Please fill the new Donor Form, to maintain its record in database!</b></br></br>
 <body bgcolor="0B3861">
 <title>Details for Insertioin into the Database</title>
    </head>
     <body>
     <form action="Insertpage.php" method="post">
	 <table>
	 <tr>
	  <td align="right"><font color="white">CONTROLN:</td>
      <td align="left"><input type="text" name="CONTROLN" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">TARGET_B:</td>
      <td align="left"><input type="text" name="TARGET_B" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">TARGET_D:</td>
      <td align="left"><input type="text" name="TARGET_D" /></td>
	  </tr>
	  <tr>
	  <td align="right"><font color="white">TCODE:</td>
      <td align="left"><input type="text" name="TCODE" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">DOB:</td>
      <td align="left"><input type="text" name="DOB" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">DOMAIN:</td>
      <td align="left"><input type="text" name="DOMAIN" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">CLUSTER:</td>
      <td align="left"><input type="text" name="CLUSTER" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">GENDER:</td>
      <td align="left"><input type="text" name="GENDER" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">AGE:</td>
      <td align="left"><input type=int name="AGE" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">WEALTH1:</td>
      <td align="left"><input type="text" name="WEALTH1" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">HIT:</td>
      <td align="left"><input type=int name="HIT" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">ODATEDW:</td>
      <td align="left"><input type="text" name="ODATEDW" /></td>
	  </tr>
	   <tr>
	  <td align="right"><font color="white">OSOURCE:</td>
      <td align="left"><input type="text" name="OSOURCE" /></td>
	  </tr>
	 <tr>
	    <td align="right" colspan="2"><input type="submit" name="submit" value="Submit to Creat New Donor" /></td>
	  </tr>
	  </table>
	</form>
	</body>
<?php
   print( '<a href="http://localhost/Homepage.php"><font size="5" color="white">   Click here to go to Home page</font></a>');
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