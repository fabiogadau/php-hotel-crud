<?php // INCLUDE
   // Head
   @include __DIR__ . '/partials/templates/head.php';
?>

<!-- MAIN CONTENT -->
<main class="container">
   <div class="row">
      <div class="col-12">
         <header class="my-4">
            <h1 class="text-primary">
               Create new room
            </h1>
         </header>

         <!-- Create room -->
         <form action="./partials/create/server-create.php" method="POST">
            <div class="form-group">
               <label for="room_number">Room number</label>
               <input class="form-control" type="number" name="room_number" id="room_number" placeholder="Insert room number">
            </div>
            <div class="form-group">
               <label for="beds">Beds</label>
               <input class="form-control" type="number" name="beds" id="beds" placeholder="Insert beds number">
            </div>
            <div class="form-group">
               <label for="floor">Floor</label>
               <input class="form-control" type="number" name="floor" id="floor" placeholder="Insert floor number">
            </div>
            <div class="form-group text-right">
               <input class="btn btn-primary" type="submit" value="Create">
            </div>
         </form>
      </div>
   </div>
</main>

<?php // INCLUDE
   // Footer
   @include __DIR__ . '/partials/templates/footer.php';
?>