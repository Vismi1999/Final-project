<?php include ('connect1.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    
.hsptl{
    width: 98%;
    height:auto;
    background-color:#320d3e;
    border-radius:20px;
    display:flex;
    flex-direction:row;
    justify-content:space-around;
    align-items:center;
    margin-top:20px;
    margin-bottom:30px;
    color:white;
    padding: 20px;

}
.hsptl img{
    width:90%;
    height:auto;
    margin:10px;
    border-radius:10px;
}
.hsptl h3{
    margin:10px;
}
.hsptl p{
    margin:15px;
}



</style>

</head>
<body>
    <?php include ('navbar.html') ?>

<div class="line" align="center">
    <h2><u>Room Types</u></h2>
    <h3>Book appointments through Hospitals.</h3>
</div>

<center><table class="hsptl">

    
<?php
    
    $sql = "SELECT id, roomtype,image FROM tbl_roomtype where is_active = 'True'";
    $retval = mysqli_query( $conn, $sql);
    $rows = mysqli_fetch_all($retval, MYSQLI_ASSOC );
    foreach((array)$rows as $row){
        $id=$row['roomtype_id'];
        $room_type=$row['room_type'];
        $place=$row['image'];
        // $address=$row['address'];
        // $contact=$row['contact'];
        // $active=$row['is_active'];
        // $imgsrc=$row['img'];

        echo '
        
        <tr>
        <th colspan="3" align="center">'.$room_type.'</th>
        </tr>
        <tr>
        <div>
        <td>
        <img src="'.$imgsrc.'" alt="hospital">
                
        </td>
        <td align="center">
        <h3>'.$room_type.'</h3>
        
        <td align="center">
        <h3>Specilization</h3>';
        // $sql1="SELECT DISTINCT field from doctor where hspl='$name'";
        // $retval1 = mysqli_query( $conn, $sql1);
        // $rows1 = mysqli_fetch_all($retval1, MYSQLI_ASSOC );
        // foreach((array)$rows1 as $row1){
        //     $field=$row1['field'];
        //     echo '<p>'.$field.'</p>';
        }
        echo '        
        </td>
        </div>
        </tr>
        <tr>
        <td colspan="3" ><button formaction="#">View full details</button></td>
        </tr>
        <tr>
        <td colspan="3"><hr></td>
        </tr>
        ';
    }
?>
</table></center>



<?php include ('footer.html') ?>

</body>
</html>