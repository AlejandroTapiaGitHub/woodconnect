<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de Código de Verificación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 150px;
        }

        .content {
            padding: 20px;
        }

        .verification-code {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            background-color: rgb(172, 209, 221);
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        #logotipoApp {
            width: 90px;
            border-radius: 50%;
            border: solid;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <h1>Woodconnect</h1>
        </div>
        <div class="content">
            <p>Estimado usuario,</p>
            <p>Gracias por registrarte en Woodconnect . Para completar tu registro, por favor verifica tu dirección de correo electrónico utilizando el siguiente código de verificación:
            </p>
            <p class="verification-code">{{ $verifyCode }}</p>

            <p>Por favor, copie este codigo en la aplicacion para verificar su cuenta.</p>
            <p>Este paso es necesario para completar el registo</p>
        </div>
        <div class="footer">
            <p>Este correo electrónico fue enviado automáticamente. Por favor, no respondas a este mensaje.</p>
        </div>
    </div>
</body>

</html>
