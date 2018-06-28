<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="formatacao.css"
              type="text/css">
    </head>
    
    <body bgcolor="#00ffe2">        
    
        <h1 id="tamanho" >Nome do site</h1>        
        <hr width="100%" align="center" size="" color="black">
        
        <div align="center">
            
            <form action="pagina2.php" method="POST" >
            
         <h2><i>Insira seus dados</i></h2><br>
         <h1 id="tamanho2">Nome completo:  <input type="text" name="nome"> <br><br>
        Email: <input type="email" name="email"><br><br>
        Senha: <input type="password" name="senha"><br><br>
        Confirme a senha: <input type="password" name="senha"><br><br>
        Data de nascimento: <input type="date" name="data"> <br><br>
        </h1>
         <input type="hidden" name="acao" value="acao">
        <input type="submit" name="salvar" value="Salvar">
        <input type="reset" name="limpar" value="Limpar">
        
        </form>
        </div>
    </body>
</html>

<html>
    <head>
        <meta charset="utf-8">
    </head>        
    <body>
        <?php
        session_start();
          if (isset($_POST['acao']) && isset($_POST['acao'])){
        $nome = trim($_POST["nome"]);
        $email = trim ($_POST["email"]);
        $senha = trim ($_POST["senha"]);
        $data = trim ($_POST["data"]);
        $telefone = trim ($_POST["telefone"]);
    
        if (empty($nome))
        {
        echo "<script> alert ('Preencha o nome')</script>";
        }
        if (empty($email))
        {
        echo "<script> alert ('Preencha o email')</script>";
        }
        if (empty($senha)||strlen($senha)<8)
        {
        echo "<script> window.alert ('Preencha a senha e não pode ter menos que 8 caracteres')</script>";
        }
        if (empty($data))
        {
        echo "<script> alert ('Preencha a data')</script>";
        }
        
          
      
    
        
        include("conexao.php");
        $inserindo = "INSERT INTO dados (nome,email,senha,data) VALUES('$nome', '$email', '$senha', '$data')";
        $enviando = mysqli_query($conecta, $inserindo);
        if(mysqli_insert_id($conecta)){
            $_SESSION['msg'] = " <p style='color:green;'> Usuário cadastrado com sucesso</p>";
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = " <p style='color:red;'> Usuário não foi cadastrado com sucesso</p>";
            header("Location: index.php");
        }
    }
    ?>
    </body>
</html>
