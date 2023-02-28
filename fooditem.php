<?php
include "connect1.php";
$sql = "SELECT * FROM `tbl_foodmenu` WHERE STATUS = 1";
$result = mysqli_query($conn,$sql);
?>
<html>
  <head>
    <style>
      
      
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="index1.php">Home</a>

  <a href="menu1.php">Catagory</a>
  
 
  <a href="Cart/mycart.php">Order</a>
  <!-- <a href="#about">Order</a> -->
  <a href="user_logout">Logout</a>
</div>

<div class="content">
  <h2>  welcome ! Our Restuarant</h2>
  <!-- <img src="reg.jpg"> -->
  <body>
    <div class="row1" >
                    <?php while($row = $result->fetch_assoc()) { 
                        $foodmenu = $row['foodmenu'];
                        $discription = $row['discription'];
                        $image = $row['image'];
                        $image_src = "./admin/photos3/".$image;
                        $price= $row['price'];
                        // $url= ($row['0'])
                    ?>
                    <div class="column"><center>
                    <!-- <a href="menuitem.php?id=<?php echo $row['catagory_id']; ?>"> -->
                    <div class="card ">
                        
                            <img src="<?php echo $image_src; ?>" alt="brand" style="width:100%">
                            <div class="container"style="width:80%">
                               <h2><?php echo $foodmenu;?></h2>
                               <h7><?php echo $discription;?></h7> 
                               <!-- <h2><?php echo $image;?></h2> -->
                              
                          
                               <h3>₹ <?php echo $price;?></h3>
                                 <!-- <?php echo "<td><button type='button' class='btn btn-success'>Add to card</button></td>";?></h2>  -->
                            <!-- <a href="../card/manage_cart.php"></a> -->
                            <!-- <button type="submit" name ="add_to_cart" class='btn btn-success'>Order Now</button> -->
                            </div>
                        
                        </div>
                        </center>
                    </div>
                    </a>
                     <?php } ?>
                </div>
    
                    </body>
</div>




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
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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
  .card button{margin-bottom: 20px;}
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
    padding: 8px;
    color: white;
    background-color: #497df7;
    text-align: center;
    cursor: pointer;
    width: 100%;
    margin-bottom: 20px;
  }
  
  .button:hover {
    background-color: #555;
  }

  .card img {
    max-height: 250px;
  }


    
    
    
    </style>
    
    
    
    
    
                    </head>
                    </html>
    
