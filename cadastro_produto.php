<?php
include_once('cadastro_produto.php');


if(isset($_FILES['arquivos'])){

    include("config.php");

    $arquivo = $_FILES['arquivos'];

    if($arquivo['error']){
        die("Falha ao enviar arquivo");
        var_dump($arquivo);
    }

    if($arquivo['size'] > 2097142){
        die("Arquivo maior que 2MB");
    }

    $pasta = "/home/LucasSoares/teste-site/arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    $enderecoMSQL = $pasta.$novoNomeDoArquivo.".".$extensao;
    $nomeProduto = $_POST['nomeProduto'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];


    if($extensao != "jpg" && $extensao != "png"){
        die("Tipo de arquivo não aceito");
    }

    if (is_uploaded_file($_FILES['arquivos']['tmp_name'])) {

        $deuCerto = copy($_FILES['arquivos']['tmp_name'], $pasta.$novoNomeDoArquivo.".".$extensao);

        if($deuCerto){
            
            $dados = executarSql("INSERT INTO produto(categoria, descricao, endereco, nomeProduto) VALUES('$categoria','$descricao','$enderecoMSQL','$nomeProduto')") or die("Não deu certo"); 
            echo("<p>Arquivo enviado com sucesso! Para acessa-lo. clique aqui: <a href='arquivos/$novoNomeDoArquivo.$extensao' target=\"_blank\">Clique aqui</a></p>");
        }
        else{
            echo("<p>Falha ao enviar arquivo</p>");
            print_r($_FILES['arquivos']);
        }
    
    } else {
        echo("<p>Arquivo não fez upload</p>");
        var_dump($arquivo);
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
    <title>Cadastro do Produto</title>
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
                <div class="login"> <a href="">Login</a> </div>

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

        <main class="cadastro">

            <div class="box">

            <form enctype="multipart/form-data" method="post" action="">

                <fieldset class="fieldset-usuario">
                <legend><b> Cadastro de Produto </b></legend>
                <br>

                <div class="form-produto">

                    <div>
                        <label for="nomeProduto">Nome do produto</label>
                        <br>
                        <input type="text" id="nomeProduto" name="nomeProduto" class="inputUser">
                    </div>
                        <br>
                    <div>
                        <label for="categoria">Categoria</label>
                            <br>
                        <select name="categoria" id="categoria" class="inputUser">
                            <option value="ferramenta">Ferramenta</option>
                            <option value="eletrodomestico">Eletrodoméstico</option>
                            <option value="livro">Livro</option>
                            <option value="conhecimento">Conheciemnto</option>
                        </select>
                    </div>
                        <br>
                    <div>
                        <label for="">Descrição do produto</label>
                        <br>
                        <textarea name="descricao" rows="10" cols="30" class="inputText">Descrição do produto.</textarea>
                    </div>
                    <br>

                    <div>
                        <label for="arquivos">Selecione as fotos do produto:</label>
                        <input name="arquivos" type="file" class="btn-login">
                    </div>


                    <input type="submit" value="submit" class="btn-login">
                    
                </div>


            </form>

                </fieldset>
                
            </div>
           
           
        </main>


        <!-- FOOTER INICIO-->
        <footer>
            <h1>Aqui é o Footer </h1>

        </footer>

    </div>
</body>
</html>