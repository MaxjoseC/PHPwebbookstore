<?php
// Configuración de la conexión a la base de datos
$dsn = 'mysql:host=sql305.infinityfree.com;dbname=if0_36305978_Libreria_db';
$username = 'if0_36305978';
$password = 'X765gazCECnDD';

// Intentar establecer la conexión a la base de datos
try {
    $pdo = new PDO($dsn, $username, $password);
    // Excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error al conectarse a la base de datos ' . $e->getMessage());
}

// Consulta SQL para obtener los nombres de los libros y los autores de la tabla libros
$sql = "SELECT titulo, tipo, precio, notas, fecha_pub FROM titulos";

try {
    // Preparar y ejecutar la consulta SQL
    $statement = $pdo->query($sql);

    // Obtener los resultados de la consulta
    $libros = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Error al ejecutar la consulta: ' . $e->getMessage());
}

// Función para seleccionar la imagen del libro basada en la longitud del título
function seleccionarImagen($titulo) {
    $longitud = strlen($titulo);
    if ($longitud >= 10 && $longitud <= 14) {
        return "libro1.jpg";
    } elseif ($longitud >= 18) {
        return "libro2.jpg";
    } else {
        return "libro3.jpg";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros - Librería Virtual</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <h1>Titulos disponibles</h1>
    </header>
    <nav id="menu">
        <div class="dropdown">
            <button class="dropbtn">&#9776; Menú</button>
            <div class="dropdown-content">
                <a href="/">Inicio</a>
                <a href="/Autores.php">Autores</a>
                <a href="/Contacto.php">Contacto</a>
            </div>
        </div>
    </nav>
    <section>
        <!-- Contenido de la página de libros -->
        <?php foreach ($libros as $libro): ?>
            <?php $imagen = seleccionarImagen($libro['titulo']); ?>
            <div class="book-slot">
                <div class="book-details">
                    <h2><?php echo $libro['titulo']; ?></h2>
                    <p>Categoria: <?php echo $libro['tipo']; ?></p>
                    <p>Precio: <?php echo $libro['precio']; ?></p>
                    <p>Fecha de publicación: <?php echo $libro['fecha_pub']; ?></p>

                </div>
                <div class="book-image">
                    <img src="<?php echo $imagen; ?>" alt="Portada del libro">
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <footer>
        <p>Derechos Reservados &copy; 2024 Librería Virtual</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>