<?php
    session_start(); 
    
    include '../connect1.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['add_to_cart'])){
            $pid= $_POST['foodmenu_id'];
            $login_id= $_SESSION['sid'];
            $quantity= $_POST['quantity'];
            $sql_already_exist = mysqli_query($conn,"SELECT quantity FROM tbl_cart WHERE foodmenu_id = $pid AND log_id = $login_id");
            if($sql_already_exist && mysqli_num_rows($sql_already_exist) > 0){
                $row = mysqli_fetch_array($sql_already_exist);
                $quantity = $quantity + $row["quantity"];
                
                $update_cart_item = mysqli_query($conn, "UPDATE `tbl_cart` SET `quantity`= '$quantity' WHERE foodmenu_id='$pid' AND `log_id` = $login_id");
                if($update_cart_item){
                    echo "<script>window.location.href='mycart.php';</script>";      
                }
            }
            else{
                $addtocart_res= mysqli_query($conn,"INSERT INTO tbl_cart VALUES(null, $login_id, $pid, $quantity)");
                if(mysqli_insert_id($conn) >= 0){
                    echo "<script>
                        alert('Item added to cart successfully.');
                        window.location.href='mycart.php';
                    </script>";
                }
            }
        }
        if(isset($_POST['Remove_Item']))
        {
            $pid= $_POST['pname'];
            $login_id= $_SESSION['log_id'];
            $del_cart_item_res= mysqli_query($conn,"DELETE FROM tbl_cart WHERE `foodmenu_id` = $pid AND `log_id`  =$login_id");
            if($del_cart_item_res){
                echo "<script>
                    alert('Item deleted from cart successfully.');
                    window.location.href='../cart/mycart.php';
                </script>";
            }
            else{
                echo "<script>
                    alert('Unable to delete item !! Please try again');
                    window.location.href='../cart/mycart.php';
                </script>";
            }
        }
        
        if(isset($_POST['Update_Item']))
        {
            $pid= $_POST['pname'];
            $quantity= $_POST['pquantity'];
            $login_id= $_SESSION['login_id'];
            $update_cart_item_res= mysqli_query($conn, "UPDATE `tbl_cart` SET `quantity`='$quantity' WHERE foodmenu_id='$pid '");
            if($update_cart_item_res){
                echo "<script>
                    alert('Item updated successfully.');
                    window.location.href='../cart/mycart.php';
                </script>";
            }
            else{
                echo "<script>
                    alert('Unable to update item !! Please try again');
                    // window.location.href='../cart/mycart.php';
                </script>";
            }
       }
    }     
?>
