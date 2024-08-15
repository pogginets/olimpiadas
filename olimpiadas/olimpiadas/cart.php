<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT products.name, products.price, cart.quantity 
        FROM cart 
        JOIN products ON cart.product_id = products.id 
        WHERE cart.user_id = '$user_id'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Carrito de Compras</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="cart.php">Carrito</a>
            <a href="add_product.php">Añadir Producto</a>
            <a href="logout.php">Cerrar Sesión</a>
        </nav>
    </header>
    <main>
        <h2>Tu Carrito</h2>
        <div class="cart-list">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='cart-item'>";
                    echo "<h3>" . $row['name'] . "</h3>";
                    echo "<p>Precio: $" . $row['price'] . "</p>";
                    echo "<p>Cantidad: " . $row['quantity'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "Tu carrito está vacío.";
            }
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Mi Tienda Online</p>
    </footer>
</body>
</html>
