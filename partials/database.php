<?php
   // Include database
   @include __DIR__ . '/../env.php';

   // Connection
   $connection = new mysqli($server_name, $username, $password, $db_name);

   // Check connection
   if ( $connection && $connection->connect_error ){
      die('Si è verificato un errore');
   }