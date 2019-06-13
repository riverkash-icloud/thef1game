<?php
class Product {
  
  // Database connection and table name
  private $conn;
  private $table_name = 'products';
  
  // Object propeties
  public $id;
  public $name;
  public $price;
  public $description;
  public $category_id;
  public $timestamp;
  
  public function __construct($db) {
    $this->conn = $db;
  }
  
  // Create a product
  function create() {
    
    $query = "INSERT INTO " . $this->table_name . "
              SET name=:name, price=:price, description=:description, category_id=:category_id, created=:created";
    
    $stmt = $this->conn->prepare($query);
    
    // Posted values
    $this->name = htmlspecialchars(strip_tags($this->name));
    $this->price = htmlspecialchars(strip_tags($this->price));
    $this->description = htmlspecialchars(strip_tags($this->description));
    $this->category_id = htmlspecialchars(strip_tags($this->category_id));
    
    // Get timestamp for created field
    $this->timestamp = date('Y-m-d H:i:s');
    
    // Bind values
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":price", $this->price);
    $stmt->bindParam(":description", $this->description);
    $stmt->bindParam(":category_id", $this->category_id);
    $stmt->bindParam(":created", $this->timestamp);
    
    if($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
}