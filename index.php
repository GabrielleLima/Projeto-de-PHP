<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet"
              href="formatacao.css"
              type="text/css">
               
    </head>
    <body bgcolor="#00ffe2">
        <?php
        
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
       
        ?>
        <table  width="100%">
            <tr>
             <td> <p align="left"> <h1 id="tamanho"><b> Nome do site</b> </h1> </p> </td>
             <td align="center"> 
               <div align="right">
                   <form id="tamanho2" action="validalogin.php" method="POST">
                    Login: <input type="text" name="login" size="20">
                    Senha: <input type="password" name="senha" size="6">
                    <input type="submit" name="entrar" value="Entrar"> <br><br>
                    <a href="pagina2.php" > Não tenho conta </a>
                 </form>
           
                </div>
             </td>
             </tr>
        
         </table>
        
        <hr width="100%" align="center" size="" color="black">
        <div align="left"> <img src="foto1.jpg" height="20%" width="20%"> <img src="foto4.jpg" height="20%" width="20%" ><br>
            <img src="foto3.jpg" height="20%" width="20%" > <img src="foto2.jpg" height="20%" width="20%">
            <div align="right"> 
            <h1> <b> O site feito para você poder salvar suas fotos!</b></h1>
        </div>
        </div> 
        
         <br><br>
        <div> Fale conosco: email@gmail.com ou 99999-9999 </div>
    </body>
</html>
