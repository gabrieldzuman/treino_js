<?php
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino Js - Show/Off</title>
</head>
<body>
    <div id="div_ola">
        Olá, Mundo!
    </div>
    <button type="button" onclick="mostrar()" />Mostrar</button>
    <button type="button" onclick="esconder()" />Esconder</button>
    <script>
        function mostrar() {
            document.getElementById("div_ola").style.display = "";
        }

        function esconder() {
            document.getElementById("div_ola").style.display = "none";
        }
    </script>
</body>
