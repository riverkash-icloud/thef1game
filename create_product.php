<?php
// Include the Database and Object files
include_once('config/database.php');
include_once('objects/product.php');
include_once('objects/category.php');

// Get database connection
$database = new Database();
$db = $database->getConnection();

// Pass connection to objects
$product = new Product($db);
$category = new Category($db);

// Set page headers
$page_title = 'Create Product';
include_once('layout/header.php');

  echo "<div class='right-button-margin'>";
    echo "<a href='index.php' class='btn btn-primary float-md-right'>Read Products</a>";
  echo "</div>";
?>

<?php
// Footer
include_once('layout/footer.php');
?>