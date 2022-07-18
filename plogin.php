<?php
session_start();
include("connection.php");


$employeeID = mysqli_real_escape_string($conn,$_POST['EMPLOYEE_ID']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$sql = "SELECT * FROM EMPLOYEE WHERE EMPLOYEE_ID = '$employeeID' AND EMPLOYEE_ICNO = '$password' AND PERMISSION_ID = '1'";
$qry = mysqli_query($conn, $sql);
$row = mysqli_num_rows($qry);

if($row >0 )
{
    $r = mysqli_fetch_assoc($qry);
    session_start();
    $_SESSION['EMPLOYEE_ID'] = $employeeID;
    $_SESSION['EMPLOYEE_NAME'] = $r['EMPLOYEE_NAME'];
	
    header("Location: homepage.php");
}

else{?>
	<script type="text/javascript">
		alert("USERNAME AND PASSWORD IS INVALID !");
		window.location.href = "index.php";
	</script><?php
	}

	mysqli_close($conn);
?>