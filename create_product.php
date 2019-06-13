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

// If the form was submitted
if($_POST) {
  // Set property values
  $product->name = $_POST['name'];
  $product->price = $_POST['price'];
  $product->description = $_POST['description'];
  $product->category_id = $_POST['category_id'];
  
  // Create the product
  if($product->create()) {
    echo "<div class='alert alert-success'>Product was created.</div>";
  }
  
  // If unable to create product, tell the user
  else {
    echo "<div class='alert alert-danger'>Unable to create product.</div>";
  }
}
?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <table class="table table-hover table-responsive table-bordered">
      <tr>
        <th>Name</th>
        <td>
          <input type="text" name="name" class="form-control">
        </td>
      </tr>
      <tr>
        <th>Price</th>
        <td>
          <input type="text" name="price" class="form-control">
        </td>
      </tr>
      <tr>
        <th>Description</th>
        <td>
          <textarea name="description" class="form-control"></textarea>
        </td>
      </tr>
      <tr>
        <th>Category</th>
        <td>
          <?php
            // Read the product categories from the database
            $stmt = $category->read();
            
            // Put them into a select dropdown
            echo "<select class='form-control' name='category_id'>";
              echo "<option>Select Category... </option>";
              
              while($row_category = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row_category);
                
                echo "<option value='{$id}'>{$name}</option>";
              }
          
            echo "</select>";
          ?>
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <button type="submit" class="btn btn-primary">Create</button>
        </td>
      </tr>
    </table>
  </form>
<?php
// Footer
include_once('layout/footer.php');
?>