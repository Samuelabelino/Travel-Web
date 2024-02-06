<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $food = $_POST['food'];
      $many = $_POST['many'];
      $address = $_POST[''];
 

      $request = " insert into book_form(name, food, many, address) values('$name','$food','$many','$address') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>