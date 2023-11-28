<?php
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino Js - Vue</title>
</head>
<body>
    <div id="app">
        <div id="div_ola" v-if="mostrar_div">
            Olá, Mundo!
        </div>
        <button type="button" v-on:click="mostrar"/>Mostrar</button>
        <button type="button" v-on:click="esconder"/>Esconder</button>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script>
    var app = new Vue({el: "#app",
    
    data: {
        mostrar_div: true
    },
    methods:{
        mostrar(){
            this.mostrar_div = true;
        },
        esconder(){
            this.mostrar_div = false;
        },
    }
    
});
</script>
</html>
