<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Añadir Producto</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="cart.php">Carrito</a>
            <a href="logout.php">Cerrar Sesión</a>
        </nav>
    </header>
    <main>
        <div class="form-container">
            <form method="post" action="add_product.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nombre del Producto:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Precio:</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="image">Imagen del Producto:</label>
                    <input type="file" id="image" name="image" required>
                </div>

                <button type="submit">Añadir Producto</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Mi Tienda Online</p>
    </footer>
</body>
</html>
