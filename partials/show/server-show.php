<?php
   // Connect to database
   @include __DIR__ . '/../database.php';

   // Get room ID
   $id_room = $_GET['id'];

   // Get selected room
   $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
   $result = $connection->query($sql);

   if ( $connection && $result->num_rows > 0 ){
      $room = $result->fetch_assoc();
      //var_dump($room);
   }
   elseif ( $result ){
      echo 'No results';
   }
   else {
      echo 'Query error';
   }

   // Closing database connection
   $connection->close();