<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Librería Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <h1>Contacto</h1>
    </header>
    <nav id="menu">
        <div class="dropdown">
            <button class="dropbtn">&#9776; Menú</button>
            <div class="dropdown-content">
                <a href="/">Inicio</a>
                <a href="/Libros.php">Libros</a>
                <a href="/Autores.php">Autores</a>
            </div>
        </div>
    </nav>
    <section>
        <!-- Contenido de la página de contacto -->
        <h2>Formulario de Contacto</h2>
        <form action="enviar.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="correo" placeholder="Correo Electrónico" required>
            <input type="text" name="asunto" placeholder="Asunto" required>
            <textarea name="mensaje" placeholder="Mensaje" rows="4" required></textarea>
            <input type="submit" value="Enviar Mensaje">
        </form>
    </section>
    <footer>
        <p>Derechos Reservados &copy; 2024 Librería Virtual</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
