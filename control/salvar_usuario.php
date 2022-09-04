<?php
 include 'conexao.php';

     $emailT = $_POST['email'];
     
     $emailverifica = "SELECT usu_email FROM `usuario` WHERE `usu_email` LIKE '$emailT'
		";
     
     $emailverifica = mysqli_query($conexao, $emailverifica);
     $emailverifica = mysqli_fetch_assoc($emailverifica);
	$emailverifica = $emailverifica['usu_email'];
	
	if($emailT != $emailverifica){


if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$escola = $_POST['escola'];
		$serie = $_POST['serie'];
		$curso = $_POST['curso'];
		$cidade = $_POST['cidade'];
		$bairro = $_POST['bairro'];
		$rua = $_POST['rua'];
		$numeroCasa = $_POST['numeroCasa'];
		$senha = md5($_POST['senha']);
		
		
		$sql = "INSERT INTO `usuario` (`usu_nome`, `usu_status`, `usu_email`, `usu_senha`, `usu_escola`, `usu_serie`, `usu_curso`, `usu_cidade`, `usu_bairro`, `usu_rua`, `usu_Ncasa`, `uso_NlivrosLidos`, `usu_editado`, `usu_not`, 	`usu_not2`) VALUES ('$nome', '0', '$email', '$senha', '$escola', '$serie', '$curso', '$cidade', '$bairro', '$rua', '$numeroCasa', NULL, '0', '0', '0');";
		
		mysqli_query($conexao, $sql);
		
		echo "<script>
	
						location.href='../index.php?usucad=1';
						
		</script>";
		
}

}else{
    echo "<script>
    
			location.href= '../cadastro.php?usucad=2';
				</script>";
}
?>
