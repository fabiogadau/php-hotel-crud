<?php // INCLUDE
   @include_once __DIR__ . '/../../env.php';
?>

<!-- HEAD -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Hotel CRUD</title>
   <!-- Stylesheet -->
   <link rel="stylesheet" href="<?php echo $base_path; ?>dist/styles/main.css">
</head>
<body>

   <header class="main-header">
      <nav class="navbar navbar-expand navbar-dark bg-dark">
         <a class="navbar-brand" href="<?php echo $base_path; ?>">Boolean Hotel</a>

         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="<?php echo $base_path; ?>create.php">
                  New room
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo $base_path; ?>">
                  Return to rooms
               </a>
            </li>
         </ul>
      </nav>
   </header>

   <div id="app" class="pb-2">