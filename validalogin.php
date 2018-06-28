<?php
/*$host="localhost";
$user="root";
$pass="";*/

include 'conexao.php';
$banco="va";
/*if($conecta->connect_error){
    die("conexão falhou:".$conecta->connect_error."<br>");
}*/
mysqli_select_db($conecta, $banco) or die(mysqli_error());

$usuario=$_POST['login'];
$senha=$_POST['senha'];

$query = mysqli_query($conecta,"SELECT * FROM dados WHERE email='$usuario'AND senha='$senha'");
$row= mysqli_num_rows($query);

if($row>0){
    session_start();
    $_SESSION['usuario']=$_POST['usuario'];
    $_SESSION['senha']= $_POST['senha'];
    
    $consulta = mysqli_query($conecta,"SELECT * FROM dados WHERE email = '$usuario' AND senha = '$senha'");
    $login = mysqli_num_rows($consulta);
    if($login > 0){
        header('Location: index.php');
    }
 else {
        header('pagina3.php');
    }
          }
