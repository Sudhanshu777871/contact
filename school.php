<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" type="image/icon" href="C:\xamp\htdocs\PHP\contact.png">

    <!-- boostrap coding -->

    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
   <style>
       *{
    margin: 0px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
    padding: 9px;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover:not(.active) {
    background-color: #111;
  }
  
  .active {
    background-color: #4CAF50;
  }

  /* coding of form */

  input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }

  input[type=email]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }

  input[type=number]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }
  
  /* Style the label to display next to the inputs */
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    font-weight: bolder;
    color: #111;
    font-family: Arial, Helvetica, sans-serif;
    padding: 20px;
  }
  
  /* Style the submit button */
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }
  input[type=submit]:hover{
      background-color: #111;
      color: white;
  }
  
  /* Style the container */
  .container {
      margin-top: 40px;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  
  /* Floating column for labels: 25% width */
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  
  /* Floating column for inputs: 75% width */
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
  /* creating footer */
  .foot{
      padding: 30px;
      background-color: black;
      margin-top: 30px;
      color: white;
      font-weight: bolder;
      font-size: 2vw;
      text-align: center;

  }
  #footName{
color: white;
  }
  #footName:hover{
      text-decoration: underline;
      color: turquoise;
      cursor: pointer;
  }
   </style>
</head>
<body>

    <!-- coding of navigation bar -->
    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">Help</a></li>
        <li><a href="#about">Support</a></li>
        <li><a href="#about">About</a></li>
      </ul>
<!-- coding of PHP -->

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    //connecting to the database

    $servername="localhost";
    $username="root";
    $password="";
    $database="school";

    $conn=mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("The DataBase Connection Failed..... ");
    }
    else{
        $sql="INSERT INTO `schooldata` (`Fname`, `Lname`, `Email`, `Phone`, `Address`, `DateTime`) VALUES ('$fname', '$lname', '$email', '$phone', '$address', current_timestamp())";

        $test=mysqli_query($conn, $sql);
        if($test){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> The Form is Submitted SuccessFully.....
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
        else{
            echo "The Form Is Not Submitted SuccessFully.....";
        }
    }
}

?>
      <!-- coding of form -->
      <div class="container">
        <form action="school.php" method="post">
          <div class="row">
            <div class="col-25">
              <label for="fname">First Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="fname" placeholder="Your name.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="lname" placeholder="Your last name.." required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="email">Email</label>
            </div>
            <div class="col-75">
              <input type="email" id="email" name="email" placeholder="Your Email.." required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="phone">Phone.No</label>
            </div>
            <div class="col-75">
              <input type="number" id="phone" name="phone" placeholder="Your Email.." required>
            </div>
          </div>
         

          <div class="row">
            <div class="col-25">
              <label for="address">Address</label>
            </div>
            <div class="col-75">
              <input type="text" id="address" name="address" placeholder="Your address.." required>
            </div>
          </div>
        
          <div class="row">
            <input type="submit" value="Submit" class="but">
          </div>
        </form>
      </div>
    <div class="foot">
        <p>The Form Is Created By  <a href="#" id="footName"> Kumar Web Services</a></p>
    </div>  
    
</body>
</html>