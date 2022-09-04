<?php

include ("conexao.php");


if(isset($_POST['email'])){
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		
		
		$emailBanco = "SELECT usuario.usu_email, Gerente.g_email FROM `usuario`, `Gerente` WHERE (usuario.`usu_email` LIKE '$email' AND usuario.usu_status = 0) OR (Gerente.`g_email` LIKE '$email' AND Gerente.g_status = 0);";
		
		$senhaBanco = "SELECT usuario.usu_senha, Gerente.g_senha FROM `usuario`, `Gerente` WHERE (usuario.`usu_email` LIKE '$email' AND usuario.usu_status = 0) OR (Gerente.`g_email` LIKE '$email' AND Gerente.g_status = 0)";
		
		$emailB = mysqli_query($conexao, $emailBanco);
		
	 $senhaB = mysqli_query($conexao, $senhaBanco);
	
	
	
	$emailT = mysqli_fetch_assoc($emailB);
	
	$senhaT = mysqli_fetch_assoc($senhaB);
	$emailT2 = $emailT['usu_email'];
	$emailT2g = $emailT['g_email'];
	$senhaT2 = $senhaT['usu_senha'];
	$senhaT2g = $senhaT['g_senha'];
	
	 	
	/*entrar página do gerente*/		
	if($emailT2g == $email && $senhaT2g == $senha){
        
        
	     echo "<script>
	     window.location.href = '../site-gerente.php?email=$email';
	     </script>";
		
	 }
	 
	 /* entrar página do usuário*/
	elseif($emailT2 == $email && $senhaT2 == $senha){
        
        
	     echo "<script>
	     window.location.href = '../site-usuario.php?email=$email';
	     </script>";
		
	 }
	 elseif(($emailT2 == $email || $emailT2g == $email) && ($senhaT2 != $senha || $senhaT2g != $senha)){
	  
	     
	     echo "<script>
				
				window.location.href = '../index.php?s=1';
				</script>";
	 }
	 
	 
	 else{
	 			echo "<script>
	 			
						window.location.href = '../index.php?s=2';
		</script>";
	 }
		
}

?>