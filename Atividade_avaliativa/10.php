<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
        .erro {
            color: tomato;
            display: none;
        }

        .grupo {
            padding: 10px;
        }

        input {
            outline: none;
        }

        input.invalido {
            border: solid 2px tomato;
        }
    </style>
</head>
<body>
    <form action="">
        <div class="grupo">
            <input type="text" placeholder="Informe seu nome">
            <span class="erro">O nome deve ter pelo menos três caracteres</span>
        </div>

        <div class="grupo">
            <input type="text" placeholder="Informe seu email">
            <span class="erro">O email precisa ser válido</span>
        </div>

        <div class="grupo">
            <input type="password" placeholder="Informe sua senha">
            <span class="erro">A senha precisa ter pelo menos 8 caracteres, uma letra maiúscula, um número e um caractere especial</span>
            <a class="alternarSenha">👁️</a>
        </div>

        <div class="grupo">
            <input type="password" placeholder="Confirme sua senha">
            <span class="erro">A confirmação não corresponde à senha</span>
            <a class="alternarSenha">👁️</a>
        </div>

        <div class="grupo">
            <input type="submit" value="Cadastrar">
        </div>
    </form>

    <script>
        const inputs = document.querySelectorAll('input');
        const erros = document.querySelectorAll('.erro');

        function validaNome() {
            if (inputs[0].value.length < 3) {
                erros[0].style.display = 'block';
                inputs[0].classList.add('invalido');
            } else {
                erros[0].style.display = 'none';
                inputs[0].classList.remove('invalido');
            }
        }

        inputs[0].addEventListener('input', validaNome);

        function validaEmail() {
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailRegex.test(inputs[1].value)) {
                erros[1].style.display = 'block';
                inputs[1].classList.add('invalido');
            } else {
                erros[1].style.display = 'none';
                inputs[1].classList.remove('invalido');
            }
        }

        inputs[1].addEventListener('input', validaEmail);

        function validaSenha() {
            const senhaRegex = /^(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.*\d)[A-Za-z\d!@#$%^&*]{8,}$/;
            if (!senhaRegex.test(inputs[2].value)) {
                erros[2].style.display = 'block';
                inputs[2].classList.add('invalido');
            } else {
                erros[2].style.display = 'none';
                inputs[2].classList.remove('invalido');
            }
        }

        inputs[2].addEventListener('input', validaSenha);

        function confirmaSenha() {
            if (inputs[3].value !== inputs[2].value) {
                erros[3].style.display = 'block';
                inputs[3].classList.add('invalido');
            } else {
                erros[3].style.display = 'none';
                inputs[3].classList.remove('invalido');
            }
        }

        inputs[3].addEventListener('input', confirmaSenha);

        document.querySelector('form').addEventListener('submit', (evento) => {
            evento.preventDefault();
            validaNome();
            validaEmail();
            validaSenha();
            confirmaSenha();
        });

        document.querySelectorAll('.alternarSenha').forEach((botao, index) => {
            botao.addEventListener('click', () => {
                const tipoAtual = inputs[index + 2].getAttribute('type');
                const tipo = tipoAtual === 'password' ? 'text' : 'password';
                inputs[index + 2].setAttribute('type', tipo);
            });
        });
    </script>
</body>
</html>

     
