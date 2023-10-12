<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bloc de notas web</title>
</head>
<body>
    <h1>Bloc de notas web</h1>
    <hr>
    <section id="archivos">
        <h2>Archivos</h2>
        <ul>
            <?php
            // Lista todos los archivos en la carpeta actual
            $archivos = scandir(".");
            foreach ($archivos as $archivo) {
                if ($archivo != "." && $archivo != "..") {
                    echo "<li><a href='archivo.php?archivo=$archivo'>$archivo</a></li>";
                }
            }
            ?>
        </ul>
    </section>
    <section id="formulario">
        <h2>Nuevo archivo</h2>
        <form action="archivo.php" method="post">
            <input type="text" name="archivo" placeholder="Nombre del archivo">
            <input type="submit" value="Crear">
        </form>
    </section>
</body>
</html>