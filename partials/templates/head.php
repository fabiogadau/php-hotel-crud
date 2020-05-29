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
      <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="#">Boolean Hotel</a>

         <ul class="navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="<?php echo $base_path; ?>">
                  Torna alle stanze
               </a>
            </li>
         </ul>
      </nav>
   </header>