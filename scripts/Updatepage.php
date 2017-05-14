<html>
<head>
<font face="verdana" size="3" color="EFFBEF"><font face="verdana" size="3" color="EFFBEF">
 <title>Update_Records</title>
 </head>
 <p> <img src=".\Banner_for_myProject.jpg" alt="LOGO" WIDTH=1350 HEIGHT=100</p> </br>
 <center><b>The records will be updated in a moment, please hold on.....!</b></br></br>
  <body bgcolor="0B3861">
<?php 
$server = "HRK-PC\SQLEXPRESS";
$options = array(  "UID" => "Project",  "PWD" => "kushal@2u",  "Database" => "Project");
$conn = sqlsrv_connect($server, $options);
if ($conn === false)
 die("<pre>".print_r(sqlsrv_errors(), true));
else
 echo "</br>";
 $CONTROLN = $_POST['CONTROLN'];
 $DOMAIN=$_POST['DOMAIN'];
 echo "Thank you for your input,Database is currently been searched for record having CONTROLN=$CONTROLN to update them respectively";
 $sql="UPDATE [Project].[dbo].[DONOR_DETAILS] SET DOMAIN='$DOMAIN' WHERE CONTROLN=$CONTROLN";

 session_start();                          //This is to keep track  of session views
 if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+ 1;
 else 
    $_SESSION['views'] = 1; 
	
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("h:i:s A - m/d/y"), $inTwoMonths);    //To keep track of last visit.
	
  $mtime = microtime();
   $mtime = explode(" ",$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $starttime = $mtime;
 $query = sqlsrv_query($conn, $sql);
   if ($query === false)
   {  
   echo "Trying to update a record into database with wrong type or vioalation of primary Key constraint. More detais are been thrown below";
   exit("<pre>".print_r(sqlsrv_errors(), true));
   }
   else
   echo "</br>"; 
   $mtime = microtime();
   $mtime = explode(" ",$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $endtime = $mtime;
   $totaltime = ($endtime - $starttime);    
   echo "--------------------------Thank you, Operation has been sucessfully done in the back end(Cross Verify below or in back end)----------------------";
   $sql="SELECT * FROM [Project].[dbo].[DONOR_DETAILS] WHERE CONTROLN LIKE $CONTROLN";
   $query = sqlsrv_query($conn, $sql);
   echo "</br>";
   ?>
   <TABLE border="1">
   <TR><TD width="90"><font color='white'>CONTROLN <TD width="90"><font color='white'>TARGET_B  <TD width="90"><font color='white'>TARGET_D <TD width="90"><font color='white'>TCODE <TD width="90"><font color='white'>DOB <TD width="90"><font color='white'>DOMAIN <TD width="90"><font color='white'>CLUSTER <TD width="90"><font color='white'>GENDER<TD width="90"><font color='white'>AGE<TD width="90"><font color='white'>WEALTH1<TD width="90"><font color='white'>HIT<TD width="90"><font color='white'>ODATEDW<TD width="90"><font color='white'>OSOURCE</TR>
   </TABLE>
   <?php
   while ($row = sqlsrv_fetch_array($query))
    {
   ?>
   	<table border="1"> 
	<?php
	echo "<tr><td width='90'><font color='white'>$row[CONTROLN]</td> <td width='90'><font color='white'>$row[TARGET_B]</td> <td width='90'><font color='white'>$row[TARGET_D]</td> <td width='90'><font color='white'>$row[TCODE]</td> <td width='90'><font color='white'>$row[DOB]</td> <td width='90'><font color='white'>$row[DOMAIN]</td> <td width='90'><font color='white'>$row[CLUSTER]</td> <td width='90'><font color='white'>$row[GENDER]</td> <td width='90'><font color='white'>$row[AGE]</td> <td width='90'><font color='white'>$row[WEALTH1]</td> <td width='90'><font color='white'>$row[HIT]</td> <td width='90'><font color='white'>$row[ODATEDW]</td> <td width='90'><font color='white'>$row[OSOURCE]</td> </tr>";
	}
	?>
	</table>
	<?php
   echo "<br/>";
   print( '<a href="http://localhost/Homepage.php"><font size="5" color="white">Click here to go to Home page</font></a>');
   echo "<br/><br/><br/>";
   echo "The query was executed .in ".$totaltime." seconds";
   echo "<br/>";
	sqlsrv_free_stmt($query);
	sqlsrv_close($conn);

echo "Page views in Project so far = ". $_SESSION['views']; 
echo "</br>";
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