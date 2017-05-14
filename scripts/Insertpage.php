<html>
<head>
<font face="verdana" size="3" color="EFFBEF">
 <title>Update_Records</title>
 </head>
 <p> <img src=".\Banner_for_myProject.jpg" alt="LOGO" WIDTH=1350 HEIGHT=100</p> </br>
 <center><b>The new DONOR record will be INSERTED in a moment, please hold on.....!</b></br></br>
 <body bgcolor="0B3861">
<?php 
$server = "HRK-PC\SQLEXPRESS";
$options = array(  "UID" => "Project",  "PWD" => "kushal@2u",  "Database" => "Project");
$conn = sqlsrv_connect($server, $options);
if ($conn === false)
 die("<pre>".print_r(sqlsrv_errors(), true));
else
 echo "</br>";
 $CONTROLN=$_POST['CONTROLN'];
 $TARGET_B=$_POST['TARGET_B'];
 $TARGET_D=$_POST['TARGET_D'];
 $TCODE=$_POST['TCODE'];
 $DOB=$_POST['DOB'];
 $DOMAIN=$_POST['DOMAIN'];
 $CLUSTER=$_POST['CLUSTER'];
 $GENDER=$_POST['GENDER'];
 $AGE=$_POST['AGE'];
 $WEALTH1=$_POST['WEALTH1'];
 $HIT=$_POST['HIT'];
 $ODATEDW=$_POST['ODATEDW'];
 $OSOURCE=$_POST['OSOURCE'];
 echo "New record will be shortly created in database with CONTROLN=$CONTROLN to update them respectively";
 $sql="INSERT INTO [Project].[dbo].[DONOR_DETAILS] VALUES('$CONTROLN','$TARGET_B','$TARGET_D','$TCODE','$DOB','$DOMAIN','$CLUSTER','$GENDER',$AGE,'$WEALTH1',$HIT,'$ODATEDW','$OSOURCE')";

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
   echo "<br/>";
   echo "<b>**Trying to update a record into database with wrong type or vioalation of primary Key constraint. More detais are been thrown below**</b>";
   exit("<pre>".print_r(sqlsrv_errors(), true));
   }
   else
   echo "</br>";
   echo "--------------------------Thank you, New Donor has been created sucessfully in the back end----------------------";
    echo "<br/>";
   print( '<a href="http://localhost/Homepage.php"><font size="5" color="white">Click here to go to Home page</font></a>');
	echo "</br></br></br>";
   $mtime = microtime();
   $mtime = explode(" ",$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $endtime = $mtime;
   $totaltime = ($endtime - $starttime);
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