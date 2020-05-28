<?php
   // Including database
   @include __DIR__ . '/../database.php';

   // Get rooms list in homepage
   $sql = "SELECT * FROM `stanze`";
   $result = $connection->query($sql);

   if ( $result && $result->num_rows > 0 ){
      $rooms = [];

      while ( $row = $result->fetch_assoc() ){
         //echo "ID: {$row['id']} - Floor: {$row['floor']} <br>";

         // populating array with individual rooms
         $rooms[] = $row;
      }
   }
   elseif ( $result ){
      echo 'No results';
   }
   else {
      echo 'Query error';
   }

   // Closing database connection
   $connection->close();