 
<?php
 include 'conexao.php';


    if(isset($_POST['codigo'])){
        $emailAT = $_POST['gemail'];
		$codigo = $_POST['codigo'];
		

		$datab = $_POST['datab'];
		$horab = $_POST['horab'];
		$datae = $_POST['datae'];
	

       //verficar se os dados digitados pelo gerente são diferentes do atual
       
       		$datav = "SELECT p_databusca FROM `pedidos` WHERE `p_codigo` LIKE '$codigo'";
		$datav = mysqli_query($conexao, $datav);
		$datav = mysqli_fetch_assoc($datav);
	$datav = $datav['p_databusca'];
	
	
			$horav = "SELECT p_horabusca FROM `pedidos` WHERE `p_codigo` LIKE '$codigo'";
		$horav = mysqli_query($conexao, $horav);
		$horav = mysqli_fetch_assoc($horav);
	$horav = $horav['p_horabusca'];
	
		$datav2 = "SELECT p_dataE FROM `pedidos` WHERE `p_codigo` LIKE '$codigo'";
		$datav2 = mysqli_query($conexao, $datav2);
		$datav2 = mysqli_fetch_assoc($datav2);
	$datav2 = $datav2['p_dataE'];
	
	
       if(($horab == $horav) && ($datab == $datav) && ($datae == $datav2)){
         
         		echo "<script>
		
						location.href='../lista-pedidos.php?email=$emailAT';
						
		</script>";
		
        
          
           
       }else{
		
		$sql = "UPDATE `pedidos` SET `p_databusca` = '$datab', `p_horabusca` = '$horab', `p_dataE` = '$datae', `p_editado` = '1', p_not = 1, p_not2 = 1 WHERE `p_codigo` = $codigo;";
		
		mysqli_query($conexao, $sql);
		
		echo "<script>
		
						location.href='../lista-pedidos.php?e=1&email=$emailAT';
						
		</script>";
		
       }
		
	}

?>
