<?php
class Product {
    private $name;
    private $price;
    private $quantity;
    private $category;

    public function __construct($name, $price, $quantity, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}

class Inventory {
    private $products = [];

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function updateProduct($productName, $newProduct) {
        foreach ($this->products as $key => $product) {
            if ($product->getName() === $productName) {
                $this->products[$key] = $newProduct;
                return true;
            }
        }
        return false;
    }

    public function deleteProduct($productName) {
        foreach ($this->products as $key => $product) {
            if ($product->getName() === $productName) {
                unset($this->products[$key]);
                return true;
            }
        }
        return false;
    }

    public function displayProducts() {
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Price</th><th>Quantity</th><th>Category</th></tr>";
        foreach ($this->products as $product) {
            echo "<tr>";
            echo "<td>" . $product->getName() . "</td>";
            echo "<td>" . $product->getPrice() . "</td>";
            echo "<td>" . $product->getQuantity() . "</td>";
            echo "<td>" . $product->getCategory() . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}

// Example usage
$inventory = new Inventory();
$product1 = new Product("Laptop", 999, 10, "Electronics");
$product2 = new Product("Chair", 50, 20, "Furniture");

$inventory->addProduct($product1);
$inventory->addProduct($product2);

echo "Before update:\n";
$inventory->displayProducts();
echo "<br>";

$productToUpdate = new Product("Laptop", 1099, 15, "Electronics");
$inventory->updateProduct("Laptop", $productToUpdate);

echo "<br>After update:<br>";
$inventory->displayProducts();
echo "<br>";

$inventory->deleteProduct("Chair");

echo "<br>After deletion:<br>";
$inventory->displayProducts();
echo "<br>";
?>
