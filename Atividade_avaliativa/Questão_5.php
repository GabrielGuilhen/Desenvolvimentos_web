<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="botao">Botão</button>
    <ol id="lista"> 
        seguimos por aqui
        <li id="texto">Salsa Y Picante</li>
    </ol>

    <script>
        const lista = document.getElementById("lista");
        const novoTexto = document.createElement("li");
        novoTexto.innerText = "Este é o novo texto";

        lista.appendChild(novoTexto);
        
    </script>
    
</body>
</html>
