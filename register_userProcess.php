<?php
session_start();
require('connection.php');

function checkEmpID($conn,$employeeID)
{
    $found = false;
    $sql = "SELECT EMPLOYEE_ID FROM EMPLOYEE WHERE EMPLOYEE_ID='".$employeeID."'";
    $qry=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($qry);

    if($row > 0)
    {
        $found = true;
    }
    return $found;
}

$employeeID=$_POST['EMPLOYEE_ID'];
$employeeICNO=$_POST['EMPLOYEE_ICNO'];
$employeeName=$_POST['EMPLOYEE_NAME'];
$permission=$_POST['PERMISSION_ID'];



$register="INSERT INTO EMPLOYEE (EMPLOYEE_ID,EMPLOYEE_ICNO,EMPLOYEE_NAME,PERMISSION_ID) VALUES('$employeeID','$employeeICNO','$employeeName','$permission')" or die("error".mysqli_errno($conn));


if($conn->query($register)== TRUE){?>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript">
          Swal.fire(
            'Succesfully add member',
            '',
            'success'
          );
        </script> <?php    
}else{?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript">
          Swal.fire(
            'Oops data already existed',
            '',
            'error'
          );<?php echo $tracking_no?>
      </script><?php

}
    
    $conn->close();

?>