<?php
    include_once('cabecalho_usuario_logado.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Home</title>
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
                <div class="login"> <a href="logout.php">Logout</a> </div>
                <div class="login"> <a href="conta_usuario.php">Conta</a> </div>

            </div>

            <!-- Menu de navegação -->
        
            <nav class="menu">
                <ul>
                    <li><a href="login.php">HOME</a></li>
                    <li><a href="">Quem somos</a></li>
                    <li><a href="">Como Funciona</a></li>
                    <li><a href="">Contato</a></li>
                </ul>   
            </nav>
            
        </header>
        <!-- FIM DO HEADER -->
      

        <main class="main">
            <aside class="categoria">
                <h1>Categorias</h1>
            </aside>
            <div class="principal">
                <h1>conteudo</h1>
            </div>
        </main>

        <footer>
            <h1>Aqui é o Footer </h1>

        </footer>

    </div>

</body>
</html>