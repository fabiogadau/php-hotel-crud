<?php
   // Connect to database
   @include_once __DIR__ . '/../database.php';

   // Get room to edit
   if ( !empty($_GET['id']) ){
      $id_room = $_GET['id'];

      // query
      $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
      $result = $connection->query($sql);

      if ( $result && $result->num_rows > 0 ){
         $room = $result->fetch_assoc();
      }
      else {
         die("The ID doesn't exist");
      }
   }
   else {
      die('Impossible to get the room to edit');
   }
   
   // Closing database connection
   $connection->close();