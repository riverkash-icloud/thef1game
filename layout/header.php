<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title><?php echo $page_title; ?></title>
  
  <!-- My custom CSS -->
  <link rel="stylesheet" href="libs/css/custom.css">
</head>
<body>
  <!-- Container -->
  <div class="container">
    <?php
      // Show page header
      echo "<div class='page-header'><h1>{$page_title}</h1></div>";
    ?>
