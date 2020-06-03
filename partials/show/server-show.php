<?php
   // Connect to database
   @include __DIR__ . '/../database.php';

   // Utilities
   @include __DIR__ . '/../functions.php';
   
   // Get room ID
   $id_room = $_GET['id'];
   $room = getById($connection, 'stanze', $id_room);