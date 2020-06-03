<?php
   // Connect to database
   @include __DIR__ . '/../database.php';

   // Utilities
   @include __DIR__ . '/../functions.php';

   // Get room ID
   if ( empty($_POST['id']) ){
      die('Incorrect ID');
   }

   $id_room = $_POST['id'];
   $url = "$base_path?delete=room";

   // Delete room Query
   removebyId($connection, 'stanze', $id_room, $url);