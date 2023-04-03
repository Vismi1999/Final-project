function validateForm() {
    // Get input values
    var name = document.forms["deliveryForm"]["name"].value;
    var roomno = document.forms["deliveryForm"]["roomno"].value;
    var order = document.forms["deliveryForm"]["order"].value;
    var time = document.forms["deliveryForm"]["time"].value;
  
    // Check if input values are not empty
    if (name == "") {
      alert("Please enter your name");
      return false;
    }
    if (roomno == "") {
      alert("Please enter your room number");
      return false;
    }
    if (order == "") {
      alert("Please select an order option");
      return false;
    }
    if (time == "") {
      alert("Please select a time for delivery");
      return false;
    }
    // If all input values are valid, return true
    return true;
  }