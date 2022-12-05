
<?php
    include_once('cabecalho_usuario_logado.php');

    //$usuario = executarSql('SELECT nome FROM usuario WHERE email="'.$email.'" AND senha = "'.$senhaHash.'"');
    $usuario = $_POST['email'];
    echo($usuario);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Tela conta usuário</title>
</head>
<body>

    <div class="conteiner">    

        <!--  Inicio do Header -->
        <header>
            <div class="topo">

                <!-- A logo -->
                <div class="logo"> <img src="imagens/Logo.png" alt="" width="150px" height="50px"> </div>

                <!-- Barra de Pesquisa-->
                <div class="barra"> <input type="text" placeholder="Search.." class="procurar"> </div>

                <!-- Login -->
                <div class="login"> <a href="login.html" target="_blank" >Login</a> </div>

            </div>

            <!-- Menu de navegação -->
        
            <nav class="menu">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">Quem somos</a></li>
                    <li><a href="">Como Funciona</a></li>
                    <li><a href="">Contato</a></li>
                </ul>   
            </nav>
            
        </header>
        <!-- FIM DO HEADER -->
        
        <div class="conta">

            

                <br/>
                <br/>

                <h3>Informações usuário</h3>

                <div class="telaUsuario" id="informacoesUsuario">


                    <div>

                        <img id="fotoUsuario" src="/imagens/img-usuario.jpeg" alt="foto usuário">

                    </div>
                    
                    <div id="usuario">

                        <nav>
                            <ul>
                                <li>Nome Completo:</li>
                                <li>Email:</li>
                                <li>Telefone:</li>
                                <li>Cidade:</li>
                                <li>Estado:</li>
                                <li>Endereço:</li>
                            </ul>
                        </nav>
                    </div>

                </div>

                <h3>Produtos para emprestar</h3>

                <div class="telaUsuario" id="produtosParaEmprestar">

                    <div class="img-product">

                        <img id="fotoProduto" src="/imagens/img-product.png" alt="foto produto">

                    </div>
                    

                    <div id="produto">
                        <nav>
                            <ul>
                                
                                <li>Nome do produto:</li>
                                <li>Categoria:</li>
                                <li>Descrição:</li>
                                
                            </ul>
                        </nav>
                    </div>

                    
                    
                </div>
                
                <button type="submit" class="btn-cadastar-produto" id="submit-cadastrar"><a href="cadastro_produto.php">Cadastrar</a></button>
                <br><br><br><br>

                <h3>Produtos emprestados</h3>

                <div class="telaUsuario" id="produtosEmprestados">
                    <div class="img-product">

                        <img id="fotoEmprestado" src="/imagens/img-emprestar.png" alt="foto produto">

                    </div>       
                    
                    <div id="produto">
                        <nav>
                            <ul>
                                
                                <li>Nome do produto:</li>
                                <li>Categoria:</li>
                                <li>Descrição:</li>
                                <li>Dono:</li>
                                <li>Data de devolução:</li>
                                
                            </ul>
                        </nav>
                    </div>

                </div>
                
           


        </div>

        </main>

        <footer>
            <h1>Aqui é o Footer </h1>

        </footer>

    </div>

</body>
</html>