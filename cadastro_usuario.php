<?php
    
    include_once('cadastro_usuario');

    if($_POST){
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['password'];
        $senha2 = $_POST['password2'];
        $msgErro = '';

        if($senha == $senha2){

            $senhaHash = md5($senha);
            $result = executarSql("INSERT INTO usuario(nome, email, telefone, cidade, estado, endereco, senha) VALUES('$nome', '$email', '$telefone', '$cidade', '$estado', '$endereco', '$senhaHash')");
            include_once('cabecalho_usuario_logado.php');
        }
        else{
            $msgErro = "Senha diferente!";

        }


    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Cadastro usuario</title>
</head>
<body>
    <div class="conteiner">

        <!--  Inicio do Header -->
        <header>
            <div class="topo">

                <!-- A logo -->
                <div class="logo"> <img src="imagens/Logo.png" alt="" width="150px" height="50px"> </div>

                <!-- Barra de Pesquisa-->
                <div class="barra"> <input type="text" name="procurar" class="procurar" placeholder="Search.."> </div>

                <!-- Login -->
                

            </div>
        
            
        </header>
        <!-- FIM DO HEADER -->

        <main class="cadastro-conta">
            <div class="box">
                <form action="cadastro_usuario.php" method="POST" >
                    <fieldset class="fieldset-usuario">
                        <legend><b> Cadastro de usuário </b></legend>
                        <br>
                        <div class="inputBox">
                            <label for="nome">Nome completo</label>
                            <br>
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="email">Email</label>
                            <br>
                            <input type="text" name="email" id="email" class="inputUser" required>
                            
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="telefone">Telefone</label>
                            <br>
                            <input type="text" name="telefone" id="telefone" class="inputUser"  required>
                            
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="cidade">Cidade</label>
                            <br>
                            <input type="text" name="cidade" id="cidade" class="inputUser" required>
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="estado">Estado</label>
                            <br>
                            <input type="text" name="estado" id="estado" class="inputUser" required>
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="Senha">Senha</label>
                            <br>
                            <input type="password" name="password" id="password" class="inputUser" required>
                            
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="Senha">Confirmar senha</label><span style="color: red;"><?php echo $msgErro; ?></span>
                            <br>
                            <input type="password" name="password2" id="password2" class="inputUser" required>
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="endereco">endereço</label>
                            <br>
                            <input type="text" name="endereco" id="endereco" class="inputUser" required>  
                            
                        </div>

                        <br><br>

                        <!--<input type="submit" name="submit" id="submit">-->
                        <button type="submit" class="btn-login" id="submit">Login</button>
                        
                    </fieldset>
                </form>
            </div>    
        </main>


        <!-- FOOTER INICIO-->
        <footer>
            <h1>Aqui é o Footer </h1>

        </footer>

    </div>
</body>
</html>