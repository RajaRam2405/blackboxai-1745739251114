<?php
require_once 'config.php';

header('Content-Type: application/json');

$conn = db_connect();

$sql = "SELECT p.id, p.name, p.price, p.image_url, c.name AS category FROM products p LEFT JOIN categories c ON p.category_id = c.id";
$result = $conn->query($sql);

$products = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'image' => $row['image_url'],
            'category' => $row['category']
        ];
    }
}

echo json_encode($products);

$conn->close();
?>
