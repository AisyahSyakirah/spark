<?php
include('connection.php');
if (isset($_GET['TRACKING_NO']))
            $trackingNo= $_GET['TRACKING_NO'];
        else
        $trackingNo = 0;
{
    
                  
                      $query="SELECT * FROM PARCEL WHERE STATUS_ID='2002'";
                      $result=mysqli_query($conn, $query);

                      
                      
                      if($result->num_rows > 0){
                          $i=1;
                          while ($row=mysqli_fetch_array($result)){
                          
                          $query1="SELECT p.TRACKING_NO, p.RECEIVER_NAME, p.RECEIVER_PHONO, p.COLLECT_DATE, p.COLLECT_TIME, p.PIC_ARRIVED,c.COURIER_NAME, ps.STATUS_NAME, py.PAYMENT_PRICE 
                                  FROM COURIER c, PARCEL_STATUS ps, PAYMENT py, PARCEL p 
                                  WHERE c.COURIER_ID=p.COURIER_ID and ps.STATUS_ID=p.STATUS_ID and py.PAYMENT_ID=p.PAYMENT_ID";
                          $result1=mysqli_query($conn, $query1);
                          $row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
                          

                          
                            } 
                        }
}