<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Mi Tienda Online</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="cart.php">Carrito</a>
            <a href="add_product.php">Añadir Producto</a>
            <a href="logout.php">Cerrar Sesión</a>
        </nav>
    </header>
    <main>
        <h2>Productos</h2>
        <div class="product-list">
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product-item'>";
                    // Mostrar la imagen del producto
                    echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "' style='width:150px;height:auto;'>";
                    echo "<h3>" . $row['name'] . "</h3>";
                    echo "<p>" . $row['description'] . "</p>";
                    echo "<p>$" . $row['price'] . "</p>";
                    echo "<a href='add_to_cart.php?id=" . $row['id'] . "'>Agregar al Carrito</a>";
                    echo "</div>";
                }
            } else {
                echo "No hay productos disponibles.";
            }
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Mi Tienda Online</p>
    </footer>
</body>
</html>
