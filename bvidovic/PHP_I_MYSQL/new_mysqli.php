 <?php 
      $mysqli= new mysqli('127.0.0.1', 'root', '', 'fakultet');
      mysqli_set_charset($mysqli,'utf8');
      if(mysqli_connect_errno()){
          echo 'Doslo je do pogreske';
          echo mysqli_connect_error();
          exit;
      }
   ?>