<?php
 include 'conexao.php';

if(isset($_POST['nome'])){
        $gemailAT = $_POST['gemail'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$emailAT = $_POST['emailAT'];
		$nomeAT = $_POST['nomeAT'];
		$escola = $_POST['escola'];
		$serie = $_POST['serie'];
		$curso = $_POST['curso'];
		$cidade = $_POST['cidade'];
		$bairro = $_POST['bairro'];
		$rua = $_POST['rua'];
		$numeroCasa = $_POST['numeroCasa'];
		$senha = md5($_POST['senha']);
		
		$id = "SELECT usu_codigo FROM `usuario` WHERE `usu_email` LIKE '$emailAT'";
		$id = mysqli_query($conexao, $id);
		$id = mysqli_fetch_assoc($id);
	$id = $id['usu_codigo'];
	
	
			
		$emailv = "SELECT usu_email FROM `usuario` WHERE `usu_email` LIKE '$email' AND `usu_email` != '$emailAT'";
		$emailv = mysqli_query($conexao, $emailv);
		$emailv = mysqli_fetch_assoc($emailv);
	$emailv = $emailv['usu_email'];
	
	
       if($emailv == $email){
           		
		echo "<script>
						location.href='../cadastro_edite.php?ve=1&email=$emailAT&nome=$nomeAT&gemail=$gemailAT';
						
		</script>";
		
       }
	else{
	
		
		$sql = "UPDATE `usuario` SET `usu_nome` = '$nome', `usu_email` = '$email', `usu_senha` = '$senha', `usu_escola` = '$escola', `usu_serie` = '$serie', `usu_curso` = '$curso', `usu_cidade` = '$cidade', `usu_bairro` = '$bairro', `usu_rua` = '$rua', `usu_Ncasa` = '$numeroCasa', usu_editado = '1', usu_not = 1, usu_not2 = 1 WHERE `usuario`.`usu_codigo` = $id;";
		
		mysqli_query($conexao, $sql);
		
		echo "<script>
		
						location.href='../lista-usuarios.php?e=1&email=$gemailAT';
						
		</script>";
		
	}
		
}

?>
