<?php // INCLUDE
   // Server
   @include __DIR__ . '/partials/home/server.php';

   // Head
   @include __DIR__ . '/partials/templates/head.php';
?>

<?php // ALERTS
   if ( !empty($_GET['delete']) ){ ?>
      <div class="alert alert-success">Stanza cancellata con successo</div>
  <?php }
?>

<!-- MAIN CONTENT -->
<main class="container">
   <div class="row">
      <div class="col-12">
         <header class="my-4">
            <h1 class="text-primary">Hotel Rooms</h1>
         </header>

         <table class="table">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Number</th>
                  <th>Floor</th>
                  <th></th>
                  <th></th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <?php // Loop on database records
                  if ( !empty($rooms) ){
                     foreach ( $rooms as $room ){ ?>
                        <tr>
                           <td><?php echo $room['id']; ?></td>
                           <td><?php echo $room['room_number']; ?></td>
                           <td><?php echo $room['floor']; ?></td>
                           <td>
                              <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">View</a>
                           </td>
                           <td class="text-primary">Update</td>
                           <td class="text-danger">
                              <form action="./partials/delete/server-delete.php" method="POST">
                                 <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                                 <input class="btn btn-danger" type="submit" value="Delete">
                              </form>
                           </td>
                        </tr>
                     <?php }
                  }
               ?>
            </tbody>
         </table>
      </div>
   </div>
</main>

<?php // INCLUDE
   // Footer
   @include __DIR__ . '/partials/templates/footer.php';
?>