<?php
   // Including database
   @include __DIR__ . '/../database.php';
   
   // Utilities
   @include __DIR__ . '/../functions.php';
   // Get all rooms
   $rooms = getAll($connection, 'stanze');