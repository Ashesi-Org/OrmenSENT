  // Assume you have an array of products
$products = [
    ['id' => 1, 'name' => 'Product 1', 'category' => 'Category A', 'brand' => 'Brand X', 'price' => 10],
    ['id' => 2, 'name' => 'Product 2', 'category' => 'Category B', 'brand' => 'Brand Y', 'price' => 20],
    ['id' => 3, 'name' => 'Product 3', 'category' => 'Category A', 'brand' => 'Brand X', 'price' => 30],
    ['id' => 4, 'name' => 'Product 4', 'category' => 'Category C', 'brand' => 'Brand Z', 'price' => 40],
    ['id' => 5, 'name' => 'Product 5', 'category' => 'Category B', 'brand' => 'Brand Y', 'price' => 50],
  ];
  
  // Function to filter products by category and brand
  function filterByCategoryAndBrand($products, $category, $brand) {
    return array_filter($products, function($product) use ($category, $brand) {
      return $product['category'] === $category && $product['brand'] === $brand;
    });
  }

  // Function to filter products by price range
  function filterByPriceRange($products, $minPrice, $maxPrice) {
    return array_filter($products, function($product) use ($minPrice, $maxPrice) {
      return $product['price'] >= $minPrice && $product['price'] <= $maxPrice;
    });
  }
  
  
  // Usage example
  $filteredProducts = filterByCategoryAndBrand($products, 'Category A', 'Brand X');
  $filteredProducts = filterByPriceRange($filteredProducts, 20, 40);
  