<?php
$servidor ="";
$usuario ="";
$senha ="";
$banco ="";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

   if(mysqli_connect_error()):
       echo "erro de conexão ".mysqli_connect_error();
       endif;

?>


