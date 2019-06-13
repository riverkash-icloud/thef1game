-- Table structure for the 'products' table
CREATE TABLE IF NOT EXISTS products (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) NOT NULL,
  description text NOT NULL,
  price int(11) NOT NULL,
  category_id int(11) NOT NULL,
  created datetime NOT NULL,
  modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for the 'categories' table
CREATE TABLE IF NOT EXISTS categories (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name varchar(256) NOT NULL,
  created datetime NOT NULL,
  modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

