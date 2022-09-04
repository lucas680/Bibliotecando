<!-- aqui o gerente poderá ver a lista de entregas pendentes de livros que ainda não foram realizados pelos usuários, confirmar o mesmo -->
 
<?php

      $gemail = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Entregas Pendentes | Bibliotecando</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">

 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
</head>
<body>
    
    <?php
    
          if($gemail == NULL){
          
          						 echo "
					<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>		 
					 <script>
				
				swal({

  title: 'Bibliotecando',
  text: 'Erro de login!',
  icon: 'error',
  button: 'ok',

}).then((willDelete) => {

       window.location.href= 'index.php';      

});			
				
				</script>";
		
          
      }
    
    $c = $_GET['c'];
    
    if($c == 1){
        echo "
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>
        <script>
			 swal('Bibliotecando', 'Pedido confirmado com sucesso!', 'success');	
				</script>";
    }
    
    
    ?>
			
		<?php
    $s = $_GET['s'];
    
    if($s == 1){
        echo "
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>
        <script>
			 swal('Bibliotecando', 'Pedido excluido com sucesso!', 'success');	
				</script>";
    }
    
    
    ?>	
				
				 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
       
       <script>
     $(function(){
    $(".button-collapse").sideNav(); });
    </script>


				<!--quando o gerente editar um pedido-->
				
				<?php 
				$e = $_GET['e'];
				
				if($e == 1){
				     
				     echo "
				     <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
				     <script>
				  swal('Bibliotecando', 'Editado com sucesso!', 'success');
				        </script>";
				     
				}
				
				
				?>
				
			<!-- confirmar pedido-->	
				<?php
				
				$confEntrega = $_GET['confEntrega'];
			
		if($confEntrega == 1){
			
			$nome = $_GET['usu_nome'];
			$p_codigo = $_GET['p_codigo'];
				
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>"."<script>
				swal({
          title: 'Bibliotecando',
              text: 'Deseja realmente confirmar que o pedido de $nome foi entregue?',
                    icon: 'warning',
                            buttons: ['Cancelar', 'Confirmar'],
                                      dangerMode: true,
                                      }).then((willDelete) => {
                                        if (willDelete) {
        window.location.href = 'control/confirmar-entrega.php?p_codigo=$p_codigo&gemail=$gemail';  
              }
              });
				</script>";
				
			}
				?>
                    
                    	<!-- contatos do usuario-->	
				<?php
				
				$cont = $_GET['cont'];
			
		if($cont == 1){
		    
		    include 'control/conexao.php';
			
			$usu_codigo = $_GET['usu_codigo'];
			
			      		$nome = "SELECT usu_nome FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$nome = mysqli_query($conexao, $nome);
		$nome = mysqli_fetch_assoc($nome);
	$nome = $nome['usu_nome'];
	
				      		$escola = "SELECT usu_escola FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$escola = mysqli_query($conexao, $escola);
		$escola = mysqli_fetch_assoc($escola);
	$escola = $escola['usu_escola'];
	
				      		$email = "SELECT usu_email FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$email = mysqli_query($conexao, $email);
		$email = mysqli_fetch_assoc($email);
	$email = $email['usu_email'];
	
				      		$serie = "SELECT usu_serie FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$serie = mysqli_query($conexao, $serie);
		$serie = mysqli_fetch_assoc($serie);
	$serie = $serie['usu_serie'];
	
				      		$curso = "SELECT usu_curso FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$curso = mysqli_query($conexao, $curso);
		$curso = mysqli_fetch_assoc($curso);
	$curso = $curso['usu_curso'];
	
				      		$cidade = "SELECT usu_cidade FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$cidade = mysqli_query($conexao, $cidade);
		$cidade = mysqli_fetch_assoc($cidade);
	$cidade = $cidade['usu_cidade'];
	
				      		$bairro = "SELECT usu_bairro FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$bairro = mysqli_query($conexao, $bairro);
		$bairro = mysqli_fetch_assoc($bairro);
	$bairro = $bairro['usu_bairro'];
	
				      		$rua = "SELECT usu_rua FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$rua = mysqli_query($conexao, $rua);
		$rua = mysqli_fetch_assoc($rua);
	$rua = $rua['usu_rua'];
	
				      		$Ncasa = "SELECT usu_Ncasa FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
		$Ncasa = mysqli_query($conexao, $Ncasa);
		$Ncasa = mysqli_fetch_assoc($Ncasa);
	$Ncasa = $Ncasa['usu_Ncasa'];
	
	?>
				
				<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
				<script>
				
				if(<?php echo $cont; ?> == 1){
				
			swal('Bibliotecando', 'Nome: <?php echo $nome; ?> \nEmail: <?php echo $email; ?> \nEscola: <?php echo $escola; ?> \nSerie: <?php echo $serie; ?> \nCurso: <?php echo $curso; ?> \nCidade: <?php echo $cidade; ?> \nBairro: <?php echo $bairro; ?> \nRua: <?php echo $rua; ?> \nNúmero da Casa: <?php echo $Ncasa; ?> ', 'info');
			
				}
              
				</script>
				
				<?php
				
			}
				?>
                    
				
<div class="tudo">
				
				<!-- menu -->
				
		<nav>
				  <div class="nav-wrapper">
				    <a href="#" class="brand-logo"> Bibliotecando </a>
				    <a href="#" data-activates="menu-mobile" class="button-collapse">
				    	 <i class="material-icons"> <img src="img/menu-burger2.png" width="10%"> </i>
				     </a>
		        
		        <ul class="side-nav" id="menu-mobile">
		        	 <li><a href="site-gerente.php?email=<?php echo $gemail; ?>">Início</a></li>
		        	 <li><a href="cadastrar-livro.php?email=<?php echo $gemail; ?>">Adicionar livros</a></li>
		        	 <li><a href="lista-doacoes.php?email=<?php echo $gemail; ?>">Doações dos usuários</a></li>
		        	 <li><a href="lista-usuarios.php?email=<?php echo $gemail; ?>">Lista dos usuários</a></li>
		        	 		        	 <li><a href="lista-pedidos.php?email=<?php echo $gemail; ?>">Lista de Pedidos</a></li>
		        			     <li class="li_atual"><a href="#">Entregas Pendentes</a></li>
		        	 	
		        	 
		        	 <li><a href="sobre-gerente.php?email=<?php echo $gemail; ?>">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
			
	
	   <!-- section de pesquisa -->
	<section class="container-fluid Lusu" id="pesquisar">
				<div class="text-center">
						<h3>pesquisar pedidos</h3>
						
						<div class="container">
						 <div class="row justify-content-center mb-2">
						 	 <form method="POST" action="lista-pendentes.php?email=<?php echo $gemail;?>">
						 		<input type="text" class="form-control mb-2" name="pesquisa" placeholder="pesquisar">	
						 		<button type="submit" class="btn btn-outline-secondary mb-2">
						 			<img src="img/lupa.png" width="20px">
						 				Pesquisar
						 		</button>
						 		
						 				</form>
				
				
						 </div>
						 				<h3 class="light text-center">Pendentes:</h3>		
						 					    						 				
				<!-- relatório-->
										 		<a href="relatorio-entregas-pendentes.php?email=<?php echo $gemail; ?>"><button type="button" class="botaorelatorio btn mb-2">
						 			<img src="img/relatorio.png" width="20px">
						 	 Relatório
						 		</button></a>		
						 				
						 <div class="row tabela">
 		<table class="table table-hover striped centered responsive-table">
						 			<thead>
						 				<tr>
						 					<th scope="col">Nome:</th>
						 					<th scope="col">Email:</th>
			
									 					<th scope="col">Título:</th>
						 			  <th scope="col">Data:</th>
						 					<th scope="col">Hora:</th>
						 						<th scope="col">Entrega:</th>
						 								 		<th scope="col">Entregado:</th>			
						 		<th scope="col">Contatos:</th>			 				</tr>					
						 			</thead>
						 			<tbody>
						 						<?php
						 						
			include 'control/conexao.php';
						 						if(($_POST['pesquisa']) != NULL){
					   $pesquisa = $_POST['pesquisa'];
					  
	
						 $sql = "Select usuario.usu_codigo, usuario.usu_nome, usuario.usu_email, pedidos.p_databusca, pedidos.p_horabusca, pedidos.p_codigo, pedidos.p_dataE, pedidos.l_codigo from pedidos, usuario where (usuario.usu_nome like '%$pesquisa%' AND usuario.usu_status = 0 AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 1) or (usuario.usu_email like '%$pesquisa%' AND usuario.usu_status = 0 AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 1) or (pedidos.p_databusca like '%$pesquisa%' AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 1) or (pedidos.p_horabusca like '%$pesquisa%' AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 1) or (pedidos.p_dataE like '%$pesquisa%' AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 1)";
						
						 						}else{
						 						
						 						$sql = "Select * from pedidos where p_confEntrega = 0 AND p_excluido = 0 AND p_confirmado = 1";
						 						}
						 			          	 						$resultado = mysqli_query($conexao, $sql);
						 						while($linha = $resultado -> fetch_assoc()){
		
		      $usu_codigo = $linha['usu_codigo'];
		
		       	          $nome = "SELECT usu_nome FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
			  		$nome = mysqli_query($conexao, $nome);		  		 
            $nome = mysqli_fetch_assoc($nome);
	          $nome = $nome['usu_nome'];
	          
	          	          $email = "SELECT usu_email FROM `usuario` WHERE `usu_codigo` LIKE '$usu_codigo'";
			  		$email = mysqli_query($conexao, $email);		  		 
            $email = mysqli_fetch_assoc($email);
	          $email = $email['usu_email'];
		
		
			          	          $titulo = "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '".$linha['l_codigo']."'";
			  		$titulo = mysqli_query($conexao, $titulo);		  		 
            $titulo = mysqli_fetch_assoc($titulo);
	          $titulo = $titulo['l_titulo'];
		
		
		
		
						echo "<tr><td>".$nome."</td><td>".$email."</td><td>$titulo</td><td>".$linha['p_databusca']."</td><td>".$linha['p_horabusca']."</td><td>".$linha['p_dataE']."</td>
						
						 		  <td class='icon_usu'> <a href='lista-pendentes.php?confEntrega=1&email=$email&p_codigo=".$linha['p_codigo']."&usu_nome=$nome'><img class='cor' src='img/confirmar.png' width='20px'></a></td>	 
						
				  <td class='icon_usu'><a href='lista-pendentes.php?cont=1&usu_codigo=".$linha['usu_codigo']."&gemail=$gemail'><img class='cor' src='img/contato.png' width='20px'></a> </td>
						
						</tr>";
						 						}

     ?>
    
			    

		 								
						 			</tbody>
						 							
						 		</table>		
						 </div>
						 
						  	
	    			</div>
							
</section>

	

     	<!-- Rodapé -->
     	
	<footer class="page-footer cyan darken-4 text-center">
          <div class="container">  				
            <div class="row">
        				
              <div class="col l6 s12 rodape">
                <h5 class="white-text">Bibliotecando</h5>
                <p class="grey-text text-lighten-4">Ao abrir um livro, vislumbro um horizonte, onde a vista vai muito além do ponto.</p>
              </div>
              
              <div class="col l4 s12">             				
                <h5 class="white-text">Contatos</h5>
                <ul class="lirodape">
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/face.png"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/insta.png"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/twitter.png"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/snapchat.png"></a></li>                       
                </ul>
              </div>
          
              
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Todos os direitos reservados

            </div>
          </div>
        </footer>

  
</body>

</html>
