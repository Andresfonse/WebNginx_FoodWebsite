<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <!-- Agrega el enlace a la biblioteca de Stripe -->
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        /* Estilos para mejorar la apariencia del formulario */
        body {
            font-family: Arial, sans-serif;
          background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/221808/sky.jpg');
           background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
    background-color: rgba(255, 255, 255, 0.3); /* Hacer el fondo semi-transparente */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    width: 400px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: white; 
    font-style: italic; /* Letra cursiva */
    font-size: 15px; /* Color dorado para las etiquetas */
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid gray; /* Borde dorado para los inputs */
    border-radius: 4px;
    font-style: italic; /* Letra cursiva */
    font-size: 12px; /* Tamaño de letra pequeño */
    color: black; /* Color de letra dorado */
}

button {
            width: 400px;
            background: linear-gradient(to right, #466FFA , #46B3FA );
            color: #fff;
            padding: 10px 32px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            font-size: 1em;
            transition: background 0.3s;
        }

        button:hover {
            background: linear-gradient(to right, #6146FA , #FCDA7D );
        }

        .dollar-icon {
            position: absolute;
            left: 8px;
            top: 50%;
            transform: translateY(-50%);
        }



        .later {
            width: 600px;
            background: linear-gradient(to right, #FC7D7D , #FCC47D );
            color: #fff;
            padding: 10px 32px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            font-size: 1em;
            transition: background 0.3s;
        }

        .later:hover {
            background: linear-gradient(to right, #C5BBAF , #A5A5A5 );
        }

        .dollar-icon {
            position: absolute;
            left: 8px;
            top: 50%;
            transform: translateY(-50%);
        }


    </style>
</head>
<body>

<form action="procesar_pago.php" method="post" id="payment-form">

<img src="https://storage.googleapis.com/finmatcher-mx/pictures/wP2CdmfnlVu41Rd2Cre%CC%81dito.png" width="400" height="200" alt="">
<br><br>

    <label for="card-number">Tarjeta de crédito o débito</label>

    <input type="text" id="card-number" name="card-number" placeholder="Número de Tarjeta" required>


    <label for="card-expiry">Fecha de Vencimiento</label>
    <input type="text" id="card-expiry" name="card-expiry" placeholder="MM/YY" required>

    <label for="card-cvc">CVC (Número en la parte posterior)</label>
    <input type="text" id="card-cvc" name="card-cvc" placeholder="CVC" required>

    <label for="card-name">Apodo </label>
    <input type="text" id="card-name" name="card-name" placeholder="Nombre Completo" required>

    <button type="submit">Register  Credit  <i class="fas fa-dollar-sign dollar-icon"></i></button>
    <br><br>


    <a class="later" href="
    index.php">
    <

</a>

    
</form>



<!-- Agrega el script para inicializar el elemento de tarjeta de Stripe -->

<!-- no funcional ya que necesita claves stripe -->
<script>
    var stripe = Stripe('tu_clave_publica_de_stripe');
    var elements = stripe.elements();

    var card = elements.create('card');
    card.mount('#card-number');
</script>

</body>
</html>
