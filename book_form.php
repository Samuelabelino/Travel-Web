<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $location = $_POST['location'];
      $vehicle = $_POST['vehicle'];
      $from = $_POST['from'];
 

      $request = " insert into book_form(name, location, vehicle, form) values('$name','$location','$vehicle','$form') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>