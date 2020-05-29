<?php
   // Connect to database
   @include __DIR__ . '/../database.php';

   // Get room ID
   if ( empty($_POST['id']) ){
      die('ID non corretto');
   }

   $id_room = $_POST['id'];

   // Delete Room
   $sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
   $result = $connection->query($sql);

   var_dump($connection->affected_rows);

   if ( $result && $connection->affected_rows > 0 ){
      header("Location: $base_path?delete=1");
   }
   elseif ( $result ){
      echo 'No results';
   }
   else {
      echo 'Query error';
   }