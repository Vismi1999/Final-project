<?php
	include('header1.php');
  ?>

<!Doctype html>
<html>
  <center>
<style>
.btn-group {
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn-group button {
  padding: 12px 24px;
  margin: 0 8px;
  font-size: 16px;
  font-weight: bold;
  color:red;
  background-color:pink;
  border: none;
  border-radius: 4px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.btn-group button:hover {
  background-color: #2980b9;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

</style>
<style>
  .btn-group {
  display: flex;
  justify-content: center; */
  align-items: center;
  background-image: url('pi.jpeg');
  background-size: cover;
  width: 100%;
  height: 100vh;
  
  
}
a {
    color:Black;
    text-decoration: underline;
}
.btn-group button {
  padding: 60px 60px;
  margin: 0 8px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  border-radius: 4px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.btn-group button:hover {
  background-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}







  </style>
<body>

<!-- <h1>Button Group</h1> -->

<div class="btn-group">

<button style="font-size: 1.3em;"><a href="deliveryform1.php">BOOK TO ROOM</button>
<!-- <button><a href="deliveryform2.php">RESTUARANT</button> -->
<button style="font-size: 1.3em;"><a href="deliveryform2.php">RESTUARANT</button>
  
  
  
</div>

</center>

</body>
</html>
