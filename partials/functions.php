<?php // FUNCTIONS

   // Get all rooms
   function getAll($connection, $table){
      $sql = "SELECT * FROM `$table`";
      $result = $connection->query($sql);

      if ( $result && $result->num_rows > 0 ){
         $records = [];

         while ( $row = $result->fetch_assoc() ){
            //echo "ID: {$row['id']} - Floor: {$row['floor']} <br>";

            // populating array with individual rooms
            $records[] = $row;
         }
      }
      elseif ( $result ){
         $records = [];
      }
      else {
         $records = false;
      }

      // Closing database connection
      $connection->close();

      return $records;
   }

   // Get single record by ID
   function getById($connection, $table, $id){
      $sql = "SELECT * FROM `$table` WHERE `id` = $id";
      $result = $connection->query($sql);

      if ( $connection && $result->num_rows > 0 ){
         $record = $result->fetch_assoc();
         //var_dump($room);
      }
      elseif ( $result ){
         $record = [];
      }
      else {
         $record = false;
      }

      // Closing database connection
      $connection->close();

      return $record;
   }

   // Delete record
   function removebyId($connection, $table, $id, $url){
      $sql = "DELETE FROM `$table` WHERE `id` = $id";
      $result = $connection->query($sql);

      var_dump($connection->affected_rows);

      if ( $result && $connection->affected_rows > 0 ){
         header("Location: $url");
      }
      elseif ( $result ){
         echo 'No results';
      }
      else {
         echo 'Query error';
      }
   }