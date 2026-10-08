<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>01</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) 
            y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump).
        </header>

        <main>
            <?php
            $nombreProducto = "Ordenador";
            $numeroUnidades = 10;
            $precioProducto = 999.99;
            $productoDisponible = true;

// echo permite mostrar texto y el contenido de una variable.
            echo "La variable \$nombreProducto es de tipo " . gettype($nombreProducto) . " y tiene el valor " . $nombreProducto . "<br>";

// print permite mostrar texto y el contenido de una variable.
            print "La variable \$numeroUnidades es de tipo " . gettype($numeroUnidades) . " y tiene el valor " . $numeroUnidades . "<br>";

// printf permite mostrar el texto dando formato a los valores.
            printf(
                    "La variable \$precioProducto es de tipo %s y tiene el valor %.2f<br>",
                    gettype($precioProducto),
                    $precioProducto
            );

// print_r permite mostrar el contenido de una variable de forma legible.
            print_r(
                    "La variable \$productoDisponible es de tipo " . gettype($productoDisponible) . " y tiene el valor " .
                    ($productoDisponible ? "true" : "false")
            );
            echo "<br>";

// var_dump muestra información detallada de la variable, incluyendo su tipo y su valor.
            echo "La variable \$nombreProducto es de tipo ";
            var_dump($nombreProducto);

            echo "La variable \$numeroUnidades es de tipo ";
            var_dump($numeroUnidades);

            echo "La variable \$precioProducto es de tipo ";
            var_dump($precioProducto);

            echo "La variable \$productoDisponible es de tipo ";
            var_dump($productoDisponible);
            ?>
        </main>
        <footer>
            <p><a href="../../YRMDWESProyectoDWES/indexProyectoDWES.php">Home</a></p>
            <div class="footer-text">
                <p>2026-27 IES Los Sauces. &copy; Todos los derechos reservados. Yolanda Rodríguez Moreno</p>
                <time datetime="2026-09-30">Última actualización: 30 de Septiembre de 2026</time>
            </div>
        </footer>
    </body>
</html>
