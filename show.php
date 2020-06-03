<?php // INCLUDE
   // Get room details
   @include __DIR__ . '/partials/show/server-show.php';

   // Head
   @include __DIR__ . '/partials/templates/head.php';
?>

<!-- MAIN CONTENT -->
<main class="container">
   <div class="row">
      <div class="col-12">
         <header class="my-4">
            <h1 class="text-primary">
               Room <?php echo $room['room_number']; ?> details
            </h1>
         </header>

         <!-- Room Details -->
         <div class="card mb-5">
            <ul class="list-group list-group-flush">
               <li class="list-group-item">
                  ID: <?php echo $room['id']; ?>
               </li>
               <li class="list-group-item">
                  Room Number: <?php echo $room['room_number']; ?>
               </li>
               <li class="list-group-item">
                  Beds: <?php echo $room['beds']; ?>
               </li>
               <li class="list-group-item">
                  Floor: <?php echo $room['floor']; ?>
               </li>
               <li class="list-group-item">
                  Created: <?php echo $room['created_at']; ?>
               </li>
               <li class="list-group-item">
                  Updated: <?php echo $room['updated_at']; ?>
               </li>
            </ul>
         </div>

         <!-- Return to Update -->
         <a class="btn btn-primary" href="<?php echo $base_path; ?>edit.php?id=<?php echo $room['id']; ?>">
            Update
         </a>

      </div>
   </div>
</main>

<?php // INCLUDE
   // Footer
   @include __DIR__ . '/partials/templates/footer.php';
?>