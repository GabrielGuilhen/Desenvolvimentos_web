<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão-3</title>
</head>
<body>
     <button id="botao">
        CLIQUE AQUI!
     </button>
     <p id="contador"></p>
     

    

    <script>

        let contador = 0;
        const paragrafo = document.getElementById("contador");
        const botao = document.getElementById("botao");
        botao.onclick = function(){
        contador++;
        paragrafo.innerText = contador; 
         

    };
    </script>

 
</body>
</html>
