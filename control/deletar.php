<?php 
        include 'conexao.php';


if(isset($_GET['email'])){
			$email = $_GET['email'];
			$gemail = $_GET['gemail'];
		
			
		 $sql = "UPDATE `usuario` SET `usu_status` = '1' WHERE `usuario`.`usu_email` = '$email';";
		 
		 mysqli_query($conexao, $sql);
		 echo "<script>	 		 						 window.location.href = '../lista-usuarios.php?s=1&email=$gemail';
		 </script>";
}


?>
