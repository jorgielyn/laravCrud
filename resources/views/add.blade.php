<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="{{route('store')}}" method = "POST">
    @csrf
    <label for="fname">Date</label>
    <input type="date" id="fname" name="date" placeholder="Your name..">

    <label for="lname">Amount</label>
    <input type="text" id="lname" name="amount" placeholder="">

    <label for="lname">Amount in Number</label>
    <input type="number" id="lname" name="amountNum" placeholder="">

    <label for="lname">Reason</label>
    <input type="text" id="lname" name="reason" placeholder="">
    <label for="lname">Month</label>
    <input type="text" id="lname" name="month" placeholder="">

    <label for="lname">Name of Payee</label>
    <input type="text" id="lname" name="nameOfPayee" placeholder="">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>