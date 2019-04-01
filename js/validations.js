function validator() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("group").value;

  // If x is Not a Number or less than one or greater than 10
  if (x == 0) {
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("demo").innerHTML = text;
}