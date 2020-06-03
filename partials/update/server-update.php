<?php
   // Connect to database
   @include_once __DIR__ . '/../database.php';

   // Check id
   if ( empty($_POST['id']) ){
      die("The ID doesn't exist");
   }

   $id_room = $_POST['id'];
   $room_number = $_POST['room_number'];
   $beds = $_POST['beds'];
   $floor = $_POST['floor'];

   // Perform update
   /*$sql = "UPDATE `stanze` 
      SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
      WHERE `id` = $id_room";

   $result = $connection->query($sql);
   
   if ( $result && $connection->affected_rows > 0 ){
      header("Location: $base_path/show.php?id=$id_room");
   }
   elseif ($result){
      die('No room found');
   }
   else {
      die('An error has occured');
   }*/

   // Perform update with prepared statements
   $sql = "UPDATE `stanze` 
      SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW()
      WHERE `id` = ?";

   $stmt = $connection->prepare($sql);

   /*'iiii' perchè ritornano numeri interi*/
   $stmt->bind_param('iiii', $room_number, $beds, $floor, $id_room);

   $stmt->execute();

   if ( $stmt && $stmt->affected_rows > 0 ){
      header("Location: $base_path". "show.php?id=$id_room");
   }
   elseif ($stmt){
      die('No room found');
   }
   else {
      die('An error has occured');
   }

   // Closing database connection
   $connection->close();
