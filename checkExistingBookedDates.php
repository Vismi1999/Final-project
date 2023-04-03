<?php
    include "connect1.php";

    if(isset($_POST['checkin_check'])){
        $check_in_date= $_POST['check_in_date'];
        $check_cin_query= mysqli_query($conn,"SELECT * from tbl_booking WHERE checkin <= '$check_in_date' AND checkout >= '$check_in_date'");
        if($check_cin_query && mysqli_num_rows($check_cin_query) > 0){
            echo "exists";
        }
        else{
            echo "not exists";
        }
    }
    else if(isset($_POST['checkout_check'])){
        $check_in_date= $_POST['check_in_date'];
        $check_out_date= $_POST['check_out_date'];
        $check_cin_query= mysqli_query($conn,"SELECT * from tbl_booking WHERE checkin > '$check_in_date'");
        if($check_cin_query && mysqli_num_rows($check_cin_query) > 0){
            $flag= 0;
            while($row= mysqli_fetch_array($check_cin_query)){
                $booking_id= $row['booking_id'];
                $check_cout_query= mysqli_query($conn, "SELECT * from tbl_booking WHERE booking_id=$booking_id  AND checkin <= '$check_out_date'");
                if($check_cout_query && mysqli_num_rows($check_cout_query) > 0){
                    echo "exists";
                    $flag= 1;
                    break;
                }
            }
            if($flag==0)
                echo "not exists";
        }
        else{
            echo "not exists";
        }
    }
?>