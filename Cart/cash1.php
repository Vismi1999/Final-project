<!Doctype html>
<html>
<style>
.btn-group button {
  background-color: #04AA6D; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 29px 30px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body>

<!-- <h1>Button Group</h1> -->

<div class="btn-group">
<button><a href="deliveryform4.php">BOOK TO ROOM</button>
<button><a href="deliveryform8.php">RESTUARANT</button>
  
  
  
</div>

</body>
</html>
