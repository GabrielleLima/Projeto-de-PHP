<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "va";

/*$mysqli = new mysqli($host,$usuario,$senha,$bd);
if($mysqli->connect_errno)
    echo "falha na conexao;(".$mysqli->connect_errno.")".$mysqli->connect_error;*/
$conecta = mysqli_connect($host, $usuario, $senha, $bd);


if($conecta->connect_errno){
    die("Conexão falhou: ".$conecta->connect_errno."<br>");
} 

    ?>
