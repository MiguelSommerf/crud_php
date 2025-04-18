<?php if(@$_SESSION['id_usuario']) { ?>
<h1>Good Luck on the Path!</h1>
<?php } else { ?>
    <div class="principal">
        <form class="form-control" action="" method="post" id="form-cadastro">
            <h1>Cadastrar</h1>
            <label class="badge text-bg-dark" id="campos-login">Nome de usuário:</label>
            <input type="text" name="nome_usuario" id="campos-login">
            <br>
            <label class="badge text-bg-dark" id="campos-login">Senha:</label>
            <input type="password" name="senha_usuario" id="campos-login">
            <br>
            <a href="#" onclick="mostrarFormLogin()" style="margin-right: 85px;">Já possui cadastro? Clique aqui.</a>
            <button class="btn btn-success" type="submit">Enviar</button>
        </form>

        <form class="form-control" action="" method="post" id="form-login" style="display: none;">
            <h1>Login</h1>
            <label class="badge text-bg-dark" id="campos-login">Nome de usuário:</label>
            <input type="text" name="nome_usuario" id="campos-login">
            <br>
            <label class="badge text-bg-dark" id="campos-login">Senha:</label>
            <input type="password" name="senha_usuario" id="campos-login">
            <br>
            <a href="#" onclick="mostrarFormCadastro()" style="margin-right: 73px;">Não possui cadastro? Clique aqui.</a>
            <button class="btn btn-success" type="submit">Enviar</button>
        </form>
    </div>
    <script>
        function mostrarFormLogin(){
            document.getElementById("form-cadastro").style.display = "none";
            document.getElementById("form-login").style.display = "block";
        }

        function mostrarFormCadastro(){
            document.getElementById("form-cadastro").style.display = "block";
            document.getElementById("form-login").style.display = "none";
        }
    </script>
<?php } ?>