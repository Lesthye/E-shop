<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['register'])){
      $name = $_POST['name'];
      $email = $_POST['email'];

      $request = " insert into book_form(name, email) values('$name','$email') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }