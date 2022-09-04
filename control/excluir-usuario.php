<?php
 include 'conexao.php';
 
$emailAT = $_GET['emailAT'];
     
	
		
		$sql = "UPDATE `usuario` SET `usu_status` = '1' WHERE `usuario`.`usu_email` = '$emailAT';";
		
		mysqli_query($conexao, $sql);
		
		echo "<script>
					
						location.href='../index.php?ex=1';
						
		</script>";

?>
