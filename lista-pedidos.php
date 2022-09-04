<!-- aqui o gerente poderá ver a lista de pedidos de livros feita pelos usuários, desativar ou editar os dados dos mesmos -->

<?php

      $gemail = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Lista De Pedidos | Bibliotecando</title>

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
				
				$confpedido = $_GET['confpedido'];
			
		if($confpedido == 1){
			
			$nome = $_GET['usu_nome'];
			$p_codigo = $_GET['p_codigo'];
				
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>"."<script>
				swal({
          title: 'Bibliotecando',
              text: 'Deseja realmente confirmar o pedido de $nome?',
                    icon: 'warning',
                            buttons: ['Cancelar', 'Confirmar'],
                                      dangerMode: true,
                                      }).then((willDelete) => {
                                        if (willDelete) {
        window.location.href = 'control/confirmar-pedido.php?p_codigo=$p_codigo&gemail=$gemail';  
              }
              });
				</script>";
				
			}
				?>
                    
                    	<!-- confirmar delete-->	
				<?php
				
				$confdelete = $_GET['confdelete'];
			
		if($confdelete == 1){
			
			$p_codigo = $_GET['p_codigo'];
				
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>"."<script>
				swal({
          title: 'Bibliotecando',
              text: 'Deseja realmente deletar?',
                    icon: 'warning',
                            buttons: ['Cancelar', 'Deletar'],
                                      dangerMode: true,
                                      }).then((willDelete) => {
                                        if (willDelete) {
        window.location.href = 'control/deletar-pedido.php?p_codigo=$p_codigo&gemail=$gemail';  
              }
              });
				</script>";
				
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
		        	 		        	 <li class="li_atual"><a href="#">Lista de Pedidos</a></li>
		        
	        			     <li><a href="lista-pendentes.php?email=<?php echo $gemail; ?>">Entregas Pendentes</a></li>
		        
		        	 
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
						 	 <form method="POST" action="lista-pedidos.php?email=<?php echo $gemail;?>">
						 		<input type="text" class="form-control mb-2" name="pesquisa" placeholder="pesquisar">	
						 		<button type="submit" class="btn btn-outline-secondary mb-2">
						 			<img src="img/lupa.png" width="20px">
						 				Pesquisar
						 		</button>
						 		
						 				</form>
				
				
						 </div>
						 				<h3 class="light text-center">Pedidos</h3>		
						 					    						 				
				<!-- relatório-->
										 		<a href="relatorio-pedidos.php?email=<?php echo $gemail; ?>"><button type="button" class="botaorelatorio btn mb-2">
						 			<img src="img/relatorio.png" width="20px">
						 	 Relatório
						 		</button></a>		
						 				
						 <div class="row tabela">
 		<table class="table table-hover striped centered responsive-table">
						 			<thead>
						 				<tr>
						 					<th scope="col">Nome:</th>
						 		 		<th scope="col">Email:</th>
						 		 								 		 		<th scope="col">Livro:</th>
						 			  <th scope="col">Data:</th>
						 					<th scope="col">Hora:</th>
						 						<th scope="col">Entrega:</th>
						 								 		<th scope="col">Confirmar:</th>			
						 		<th scope="col">Editar:</th>
						 					<th scope="col">Desativar:</th>						
	 					 				</tr>					
						 			</thead>
						 			<tbody>
						 						<?php
						 						
			include 'control/conexao.php';
						 						if(($_POST['pesquisa']) != NULL){
					   $pesquisa = $_POST['pesquisa'];
					  
	
						 $sql = "Select usuario.usu_codigo, usuario.usu_nome, usuario.usu_email, pedidos.p_databusca, pedidos.p_horabusca, pedidos.p_codigo, pedidos.p_dataE from pedidos, usuario where (usuario.usu_nome like '%$pesquisa%' AND usuario.usu_status = 0 AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 0) or (usuario.usu_email like '%$pesquisa%' AND usuario.usu_status = 0 AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 0) or (pedidos.p_databusca like '%$pesquisa%' AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 0) or (pedidos.p_horabusca like '%$pesquisa%' AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 0) or (pedidos.p_dataE like '%$pesquisa%' AND pedidos.p_excluido = 0 AND pedidos.p_confEntrega = 0 AND pedidos.p_confirmado = 0)";
						
						 						}else{
						 						
						 						$sql = "Select *, l_titulo from pedidos, Livros where pedidos.p_confEntrega = 0 AND pedidos.p_excluido = 0 AND pedidos.p_confirmado = 0 AND (pedidos.l_codigo = Livros.l_codigo)";
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
		
		
						echo "<tr><td>".$nome."</td><td>".$email."</td><td>".$linha['l_titulo']."</td><td>".$linha['p_databusca']."</td><td>".$linha['p_horabusca']."</td><td>".$linha['p_dataE']."</td>
						
						 		  <td class='icon_usu'> <a href='lista-pedidos.php?confpedido=1&p_codigo=".$linha['p_codigo']."&usu_nome=$nome&email=$gemail'><img class='cor' src='img/confirmar.png' width='20px'></a></td>	 
						
				  <td class='icon_usu'><a href='editar-pedido.php?p_codigo=".$linha['p_codigo']."&gemail=$gemail'><img class='cor' src='img/editar.png' width='20px'></a> </td>
				  
		   <td class='icon_usu'> <a href='lista-pedidos.php?confdelete=1&p_codigo=".$linha['p_codigo']."&gemail=$gemail'><img class='cor' src='img/deletar.png' width='20px'></a></td>	
						
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
