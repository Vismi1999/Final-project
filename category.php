<?php
include "connect1.php";
$sql = "SELECT * FROM `tbl_catagory` WHERE STATUS = 1";
$result = mysqli_query($conn,$sql);
?>

<html>

<head>
<style>
    
    /* .hsptl{
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
    } */
    
    .row1 {
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -7.5px;
        margin-left: -7.5px;
    }
      .column {
        float: left;
        width: 24.3%;
        height: auto;
        margin-bottom: 16px;
        padding: 0 8px;
      }
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        margin: 8px;
      }
      .container {
        padding: 0 16px;
        min-height: 150px;
      
      }
      .price,.qty {
        /* min-height: 200px; */
        margin-bottom: 10px;
      }
      .card button{margin-bottom: 0px;}
      .card h2{margin-top:10px;margin-bottom: 10px;text-align: center;}
      
      .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
      }
      
      
      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px;
        color: white;
        background-color: #497df7;
        text-align: center;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
      }
      
      .button:hover {
        background-color: #555;
      }
    
      .card img {
        max-height: 250px;
      }
    
    
    </style>
    
    </head>
    <body>
        <h1>hjjjb</h1>
        <div class="row1" >
                <?php while($row = $result->fetch_assoc()) { 
                    $catagory = $row['catagory'];
                    // $Description = $row['Description'];
                    $image = $row['image'];
                    $image_src = "./admin/photos/".$image;
                    // $url= ($row['0'])
                ?>
                <div class="column"><center>
                
                <div class="card ">
                <img src="imgs/<?=$catagory['img']?>" width="200" height="200" alt="<?=$catagory['']?>">
                <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
                        <div class="container"style="width:80%">
                          <h2><?php echo $roomtype;?></h2>
                          <!-- <h 2><?php echo $Description;?></h2> -->
                        </div>
                    
                    </div>
                    </center>
                </div>
                </a>
                 <?php } ?>
            </div>

</body>




</html>