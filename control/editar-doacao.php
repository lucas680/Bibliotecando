 
<?php
 include 'conexao.php';


    if(isset($_POST['codigo'])){
        $emailAT = $_POST['gemail'];
		$codigo = $_POST['codigo'];
		

		$data = $_POST['data'];
		$hora = $_POST['hora'];
	

       //verficar se os dados digitados pelo gerente são diferentes do atual
       
       		$datav = "SELECT d_dataE FROM `doacoes` WHERE `d_codigo` LIKE '$codigo'";
		$datav = mysqli_query($conexao, $datav);
		$datav = mysqli_fetch_assoc($datav);
	$datav = $datav['d_dataE'];
	
	
			$horav = "SELECT d_horaE FROM `doacoes` WHERE `d_codigo` LIKE '$codigo'";
		$horav = mysqli_query($conexao, $horav);
		$horav = mysqli_fetch_assoc($horav);
	$horav = $horav['d_horaE'];
	
	
       if(($hora == $horav) && ($data == $datav)){
         
         		echo "<script>
		
						location.href='../lista-doacoes.php?email=$emailAT';
						
		</script>";
		
        
          
           
       }else{
		
		$sql = "UPDATE `doacoes` SET `d_dataE` = '$data', `d_horaE` = '$hora', `d_editado` = '1', d_not = 1, d_not2 = 1 WHERE `doacoes`.`d_codigo` = $codigo;";
		
		mysqli_query($conexao, $sql);
		
		echo "<script>
		
						location.href='../lista-doacoes.php?e=1&email=$emailAT';
						
		</script>";
		
       }
		
	}

?>
