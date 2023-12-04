<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header('Location: login.php');
    exit();
}

// Usuario autenticado
$usuarioAutenticado = $_SESSION['username'];

// Lista ficticia de usuarios en la fila con banderas aleatorias
$usuariosFila = ['Pedro', 'Marcos', 'Juan', 'Felipe', 'Jhno', 'Andrew', 'Lmao', 'Joseph', 'Insano'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fila Virtual</title>
    <style>
        /* Estilo para el fondo de pantalla que cubre toda la pantalla */
        body{ background:url('https://images.unsplash.com/photo-1495195129352-aeb325a55b65?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1776&q=80');
  background-size:cover;
  background-position:right;
  background-attachment:fixed;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh; /* Asegura que la altura sea al menos la altura de la ventana */
}

        /* Estilos para el contenido principal */
        h1, p {
            text-align: center;
            font-style: italic;
            font-size: 1.2em;
            color: black; /* Cambia el color del texto a blanco para que sea visible en el fondo */
        }

        #fila-container {
            text-align: center;
            font-style: italic;
            font-size: 1.2em;
            color: black;
        }

        #fila-container p {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 5px 0;
        }

        #barra-progreso {
            width: 100%;
            height: 10px;
            background-color: #ddd;
            border-radius: 5px;
            margin-top: 20px;
            display: none;
        }

        #barra-progreso div {
            height: 100%;
            border-radius: 5px;
            background-color: #FD2525;
        }

        #boton-compra {
            background: linear-gradient(to right, #FEB15F, #FE755F);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 1.2em;
            margin-top: 20px;
            display: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        #boton-compra:hover {
            background: linear-gradient(to right, #00B462, #08D8CC);
        }
    </style>
</head>
<body>

    <h1>Fila Virtual</h1>

    <?php
    // Mostrar el mensaje de saludo para el usuario autenticado
    echo "<p style='text-align: center; font-style: italic; font-size: 1.2em;'>¡Hola, $usuarioAutenticado! Estás en la fila.</p>";
    ?>

    <div id="fila-container">
        <?php
        // Simular la llegada de usuarios ficticios cada 6 segundos
        foreach ($usuariosFila as $usuario) {
            $banderas = [
                'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Flag_of_Peru_%281825%E2%80%931884%29.svg/270px-Flag_of_Peru_%281825%E2%80%931884%29.svg.png',
                'https://img.freepik.com/vector-gratis/ilustracion-bandera-columbia_53876-27125.jpg',
                'https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg',
                'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Flag_of_Chile.svg/2560px-Flag_of_Chile.svg.png',
                'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/2560px-Flag_of_Brazil.svg.png'
            ];
            $banderaAleatoria = $banderas[array_rand($banderas)];

            echo "<p style='display: flex; align-items: center;'>Esperando a $usuario <img src='$banderaAleatoria' alt='bandera' style='width: 20px; height: auto; margin-left: 5px;'></p>";

            echo "<script>setTimeout(function() { 
                document.getElementById('fila-container').innerHTML = ''; 
                document.getElementById('barra-progreso').style.display = 'block'; 
                document.getElementById('boton-compra').style.display = 'none';
                var progreso = document.getElementById('barra-progreso').getElementsByTagName('div')[0];
                var width = 0;
                var intervalo = setInterval(function() {
                    if (width >= 100) {
                        clearInterval(intervalo);
                        document.getElementById('boton-compra').style.display = 'inline-block';
                    } else {
                        width++;
                        progreso.style.width = width + '%';
                    }
                }, 50);
            }, 5000);</script>";
            sleep(2); // Esperar 2 segundos antes de mostrar el siguiente usuario ficticio
        }
        ?>

    </div>

    <div>
        <p>Es tu turno, <?php echo $usuarioAutenticado; ?>. Go Buy:</p>
        <div id="barra-progreso"><div>
        <a id="boton-compra" href="formulario_pago.php">Buy Now</a>
    </div>

</body>
</html>
