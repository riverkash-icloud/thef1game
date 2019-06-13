-- Dumping data for table `categories`
INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Fashion', NOW(), NOW()),
(2, 'Electronics', NOW(), NOW()),
(3, 'Motors', NOW(), NOW());

-- Dumping data for table `products`
INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `created`, `modified`) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', 336, 3, NOW(), NOW()),
(2, 'Google Nexus 4', 'The most awesome phone of 2013!', 299, 2, NOW(), NOW()),
(3, 'Samsung Galaxy S4', 'How about no?', 600, 3, NOW(), NOW()),
(6, 'Bench Shirt', 'The best shirt!', 29, 1, NOW(), NOW()),
(7, 'Lenovo Laptop', 'My business partner.', 399, 2, NOW(), NOW()),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, NOW(), NOW()),
(9, 'Spalding Watch', 'My sports watch.', 199, 1, NOW(), NOW()),
(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, NOW(), NOW()),
(11, 'Huawei Y300', 'For testing purposes.', 100, 2, NOW(), NOW()),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, NOW(), NOW()),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', 70, 1, NOW(), NOW()),
(25, 'Abercrombie Allen Anew Shirt', 'Awesome new shirt!', 999, 1, NOW(), NOW()),
(26, 'Another product', 'Awesome product!', 555, 2, NOW(), NOW()),
(27, 'Bag', 'Awesome bag for you!', 999, 1, NOW(), NOW()),
(28, 'Wallet', 'You can absolutely use this one!', 799, 1, NOW(), NOW()),
(30, 'Wal-mart Shirt', '', 555, 2, NOW(), NOW()),
(31, 'Amanda Waller Shirt', 'New awesome shirt!', 333, 1, NOW(), NOW()),
(32, 'Washing Machine Model PTRR', 'Some new product.', 999, 1, NOW(), NOW());
