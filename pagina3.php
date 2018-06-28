<html>
    <head>
        <?php
          include ("conexao.php");
          session_start();
        ?>
        
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet"
              href="formatacao.css"
              type="text/css">
               
    </head>
    <body action="pagina3.php" method="POST" bgcolor="#00FFFF">
        <form action="index.php" method="POST">
    
  
        <table  width="100%">
            <tr>
             <td> <p align="left"> <h1 id="tamanho"><b> Nome do site</b> </h1> </p> </td>
             <td align="center">
             </td>
            </tr>
            
        </table>
            <hr width="100%" align="center" size="" color="black">
              <p align="right"><input type="submit" name="sairpag" value="Sair"</p>
              </form>
        <?php
        
        if(isset($_POST['upload'])){
            $pasta='uploads';
            $permitido= array('image/jpg','image/jpeg','image/pjpeg');
            
            $img = $_FILES['img'];
            $tmp = $img['tmp_name'];
            $name = $img['name'];
            $type = $img['type'];
            require ('funcao.php');
            
             if(!empty($name) && in_array($type, $permitido)){
                 $nome= 'downsmaster-'.md5(uniqid(rand(),true)).'.jpg';
                 upload($tmp, $nome, 500, $pasta);
                 
                     $cadastraimg = mysql_query("INSERT INTO imgs(imgname) VALUES('$nome')");
                 
             }else{
                 echo "tipo de arquivo invalido envie jpeg";
             }
        }
        
        ?>
        
        <form action="" method="POST" enctype="multipart/form-data" name="upload">
            <input type="file" name="img" />
            <input type="submit" name="upload" value="Enviar" />
        </form>
        <br />
        <br />
        <?php
        $arquivos = glob('uploads/*.*');
        $qtd=3;
        $atual = (isset($_GET['pg'])) ? intval ($_GET['pg']):1;
        $pagarquivo = array_chunk ($arquivos, $qtd);
        $contar = count($pagarquivo);
        $result = $pagarquivo[$atual-1];
        ?>
        <?php
             foreach($result as $valor)
             {
                 printf('<img scr="%s" width="150" height="100" />',$valor);
             }
             echo "<hr />";
             for($i=1;$i<=$contar;$i++)
             {
                 if($i == $atual){
                    printf('<a href="#">( %s )</a>',$i,$i); 
                 }else{
                     printf('<a href="?pg=%s">  %s <a/>',$i,$i);
                 }
             }
        ?>
           
             </body>
             </html>
