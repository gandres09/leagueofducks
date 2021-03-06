<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/duck-icon.png" width="16px" height="16px" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>League Of Ducks</title>
</head>

<body>
    <header>
        <section class="nav">
            <a title="Home" href="index.php">
                <h1 id="lod">League Of Ducks</h1>
            </a>
        </section>
        <nav class="nav">
            <ul>
                <li><a title="Server Minecraft" class="menu" href="html/minecraft.html">Server Minecraft</a></li>
                <li><a title="Server Team Speak 3" class="menu" href="html/ts3.html">Team Speak 3</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <a title="Home" href="index.php"><img id="logo" src="img/duck-recorte.png" alt="League of ducks logo"></a>
        </section>
        <aside>
            <h3 id="registro" onclick="desplegarForm()">Registrarse</h3>
            <form id="formulario" method="POST">
                <input name="name" type="text" placeholder="Usuario" />
                <input name="pass" type="password" placeholder="Contraseña" />
                <input name="email" type="email" placeholder="alguien@ejemplo.com" />
                <input name="enviar" type="submit" value="Enviar" />
            </form>
            <script>
            const formulario = document.getElementById("formulario");

            function desplegarForm() {
                if (formulario.style.display !== "block") {
                    formulario.style.display = "block";
                } else {
                    formulario.style.display = "none";
                }
            }
            </script>
            <?php
            include("log/registrar.php");
            ?>
        </aside>
    </main>
    <footer>
        <section>
            <a href="https://www.facebook.com"><img class="contacto" src="img/facebook.svg" alt=""></a>
            <a href="https://www.twitter.com"><img class="contacto" src="img/twitter.svg" alt=""></a>
            <a href="https://www.twitch.com"><img class="contacto" src="img/twitch.svg" alt=""></a>
        </section>
    </footer>
</body>

</html>