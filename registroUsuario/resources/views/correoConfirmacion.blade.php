<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="margen: 0px; padding: 0px; background-color: #f3f3f3;">

    <div style="display: block; max-width: 728px; margin: 5px auto; width: 60%;">

        <img src="../../img/Tecmante.png"
            style="width: 100%; display: block; height: 201px; width: 360px;">

        <div style="background-color: #fff; padding: 20px; height: 100%; text-justify: center;">

        ¡BIENVENIDO <strong><?php echo $nombreCompleto?></strong> Al Septimo Congreso Internacional Del Instituto Tecnológico Superior de El Mante 2020!
            <br>
            <br>
            Da <strong>CLICK</strong> en el botón de <strong>CONFIRMAR</strong> para crear tu cuenta
            <p>
            <a href="href="{{ route('registro') }}"
                    style="display: inline-block; background-color: #483D8B; color: #E6E6FA; padding: 8px; border-radius: 15px; text-decoration: none; text-align: center;">
                    CONFIRMAR CUENTA
                </a>
            </p>

        </div>

    </div>

</body>

</html>