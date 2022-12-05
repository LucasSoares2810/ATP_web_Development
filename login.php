<?php
  include_once('config.php');

  // Se o usuario já está logado, redireciona para o home
  if (isset($_SESSION['usuario']) && isset($_SESSION['usuario']['id'])) {
    header('Location: /index.php');
    die;
  }

  $email = $_POST['email'] ?? null;
  $senha = $_POST['senha'] ?? null;
  $msgErro = '';

  // Verifica se passou dados POST
  // - Valida os dados enviados
  if(count($_POST) > 0) {    
    // Valida os campos obrigatorios
    if (empty($email) || empty($senha)) {
      $msgErro = 'Preencha todos os campos!';
    } else {
      // Valida se o usuario existe no banco com a senha
      $senhaHash = md5($senha);
      $dados = executarSql('SELECT id, email, nome FROM usuario WHERE email="'.$email.'" AND senha = "'.$senhaHash.'"');
      if($registro = $dados->fetch_assoc()) {
        // Usuario encontrado
        $_SESSION['usuario'] = $registro;
        header('Location: /index.php');
        die;
      }else{
        $msgErro = 'Usuário ou senha inválidos!';
      }
    }    
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <section class="form-section">
      <h1>Enter I borrow</h1>

      <div class="form-wrapper">
        <form action="/login.php" method="post">
          <span style="color: red;"><?php echo $msgErro; ?></span>
          <div class="input-block">
            <label for="login-email">Email</label>
            <?php echo '<input name="email" type="email" id="login-email" value="'.$email.'" />'; ?>
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input name="senha" type="password" id="login-password" />
          </div>
          <button type="submit" class="btn-login">Login</button>          
        </form>

        <div>
            <p>Não tem conta?</p>
            <a href="cadastro_usuario.php">Clique aqui!</a>
        </div>
      </div>
    </section>
  </body>
</html>