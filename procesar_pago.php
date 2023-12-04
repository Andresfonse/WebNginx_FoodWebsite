
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el nombre de usuario de la sesión
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        // Obtener otros datos del formulario
        $cardNumber = $_POST['card-number'];
        $cardExpiry = $_POST['card-expiry'];
        $cardCvc = $_POST['card-cvc'];
        $cardName = $_POST['card-name'];

        // Establecer conexión a la base de datos
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "kfc";

        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Insertar datos en la tabla
        $sql = "INSERT INTO pagos (username, card_number, card_expiry, card_cvc, card_name) 
                VALUES ('$username', '$cardNumber', '$cardExpiry', '$cardCvc', '$cardName')";

        if ($conn->query($sql) === TRUE) {
            echo '<div style="background-color: #FF2300; padding: 2px; text-align: center; color: #ffffff; font-family: italic, sans-serif;">
            <p style="font-size: 1.5em; font-style: italic; margin-bottom: 4px;">
              Tarjeta registrada exitosamente. Por favor, ahora completa el último paso para tu compra
            </p>
          </div>';        } else {
            echo "Error al registrar el pago: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    } else {
        echo "Error: No se ha iniciado sesión. registrate e intenta de nuevo";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>

@import url("https://fonts.googleapis.com/css?family=Raleway:400,400i,700");
body {
	background: #f7f7f7;
	overflow: hidden;
}
.container {
	align-items: center;
	display: flex;
	flex-direction: column;
	justify-content: center;
	height: 100vh;
	z-index: 5;
	position: relative;
	.logo {
		margin: 0 auto;
		margin-bottom: 10vw;
		max-width: 200px;
		background: rgba(255, 255, 255, 0.3);
		backdrop-filter: blur(10px);
		border-radius: 100%;
		img {
			width: 100%;
		}
	}
}
.menu {
  display: flex;
  justify-content: center;
  background-color: transparent;
}

.menu a {
  margin: 0 10px; /* Ajusta el espacio entre los enlaces */
  padding: 10px 20px;
  text-decoration: none;
  color: red;
  border: 2px solid red;
  border-radius: 20px;
  transition: background-color 0.3s, color 0.3s;
}

.menu a:hover {
  background-color: red;
  color: white;
}

.wrapper-images {
	display: flex;
	flex-direction: column;
	height: 150vh;
	justify-content: center;
	left: 50%;
	position: absolute;
	top: 50%;
	opacity: 0.6;
	transform: translate3d(-50%, -50%, 0) rotate(22.5deg);
}
.images-line {
	animation: runner 20s linear infinite;
	display: flex;
	transform: translateX(25%);
	.line {
		--tile-margin: 3vw;
		background-position: 50% 50%;
		background-size: cover;
		border-radius: 50%;
		flex: none;
		height: 30vh;
		margin: 3vw;
		width: 30vh;
		position: relative;
		&:after {
			content: "";
			background: inherit;
			display: block;
			width: 100%;
			height: 100%;
			border-radius: 50%;
			top: 3vh;
			position: absolute;
			background-size: cover;
			z-index: -1;
			filter: blur(25px) opacity(0.8);
		}
		&.large {
			border-radius: 20vh;
			width: 100vh;
		}
	}
}

@keyframes runner {
	to {
		transform: translateX(-25%);
	}
}

</style>
   
<div class="wrapper-images">
	<div class="images-line">
    <div class="line large" style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/219/756/35/kfc-wallpaper-preview.jpg)"></div>

    <div class="line" style="background-image:url(https://img1.freepng.es/20180816/xxe/kisspng-kfc-fried-chicken-vector-graphics-buffalo-wing-tak-fibre-stream-crazy-fast-internet-south-africa-5b74fcea3fa929.4444219715343935782608.jpg)"></div>
    <div class="line large" style="background-image:url(https://images6.alphacoders.com/464/464229.jpg)"></div>

		<div class="line" style="background-image:url(https://png.pngtree.com/thumb_back/fh260/background/20210911/pngtree-afternoon-tea-at-kfc-during-the-day-image_856282.jpg)"></div>
	</div>
    <div class="images-line">
		<div class="line large" style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/219/756/35/kfc-wallpaper-preview.jpg)"></div>
		<div class="line" style="background-image:url(https://img1.freepng.es/20180816/xxe/kisspng-kfc-fried-chicken-vector-graphics-buffalo-wing-tak-fibre-stream-crazy-fast-internet-south-africa-5b74fcea3fa929.4444219715343935782608.jpg)"></div>
        <div class="line large" style="background-image:url(https://images6.alphacoders.com/464/464229.jpg)"></div>

        <div class="line" style="background-image:url(https://png.pngtree.com/thumb_back/fh260/background/20210911/pngtree-afternoon-tea-at-kfc-during-the-day-image_856282.jpg)"></div>
	</div>
    <div class="images-line">
		<div class="line large" style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/219/756/35/kfc-wallpaper-preview.jpg)"></div>
		<div class="line" style="background-image:url(https://img1.freepng.es/20180816/xxe/kisspng-kfc-fried-chicken-vector-graphics-buffalo-wing-tak-fibre-stream-crazy-fast-internet-south-africa-5b74fcea3fa929.4444219715343935782608.jpg)"></div>
        <div class="line large" style="background-image:url(https://images6.alphacoders.com/464/464229.jpg)"></div>

        <div class="line" style="background-image:url(https://png.pngtree.com/thumb_back/fh260/background/20210911/pngtree-afternoon-tea-at-kfc-during-the-day-image_856282.jpg)"></div>

	</div>
	
</div>

<div class="container">
	<div class="logo">
		<img src="https://w7.pngwing.com/pngs/680/64/png-transparent-kfc-szczecin-fast-food-logo-restaurant-kfc-miscellaneous-food-text-thumbnail.png" width="200" height="300" alt="Natural Pet Bakery">
	</div>
	<nav class="menu">
		<a href="index.php">Nuestros Productos</a>
        <a href="https://wa.me/+573009120963" target="_blank">WhatsApp</a>
<a href="tel:+573009120963">Llamar</a>
	</nav>
</div>
</body>
</html>