<!-- aqui o gerente poderá ver a lista de doações feitas pelos usuários -->

<?php

      $email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Lista De Doações | Bibliotecando</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">

 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
</head>
<body>
    
    <?php
    
          if($email == NULL){
          
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
    
    $s = $_GET['s'];
    
    if($s == 1){
        echo "
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>
        <script>
			 swal('Bibliotecando', 'Deletado com sucesso!', 'success');	
				</script>";
    }
    
    
    ?>
				
				 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
       
       <script>
     $(function(){
    $(".button-collapse").sideNav(); });
    </script>


				<!--quando o gerente editar doação-->
				
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
			
							<!--quando o gerente confirmar doação-->
				
				<?php 
				$c = $_GET['c'];
				
				if($c == 1){
				     
				     echo "
				     <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
				     <script>
				  swal('Bibliotecando', 'Doação confirmada com sucesso!', 'success');
				        </script>";
				     
				}
				
				
				?>
				
				
				<?php
				
				$confdoacao = $_GET['confdoacao'];
				
				if($confdoacao == 1){
				    
				
				$nome = $_GET["usu_nome"];
				$d_codigo = $_GET['d_codigo'];
				
				    echo "     	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> </script>      
				    
				    <script type='text/javascript'>
				    
	
    
						swal({

  title: 'Bibliotecando',
  text: 'Deseja realmente confirmar a doação de $nome?',
  icon: 'warning',
  buttons: ['Cancelar', 'Confirmar'],
  dangerMode: true,
  
})

.then((willDelete) => {
  if (willDelete) {
    
    window.location.href = 'control/confirmarDoacao.php?d_codigo=$d_codigo&gemail=$email';
  }        

});

				
     </script>

";
				    
				}
				
				
				
				?>
				
				
				<?php
				$confdelete = $_GET['confdelete'];
				
				if($confdelete == 1){
				    
				    $d_codigo = $_GET['d_codigo'];
				    
				    echo "      	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
 			
     <script type='text/javascript'>
    
						swal({

  title: 'Bibliotecando',
  text: 'Deseja realmente apagar?',
  icon: 'warning',
  buttons: ['Cancelar', 'Deletar'],
  dangerMode: true,
  
})

.then((willDelete) => {
  if (willDelete) {
    
    window.location.href = 'control/deletarDoacao.php?d_codigo=$d_codigo&gemail=$email';
  }        

});
				
     </script>
";
				    
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
		        	 <li><a href="site-gerente.php?email=<?php echo $email; ?>">Início</a></li>
		        	 <li><a href="cadastrar-livro.php?email=<?php echo $email; ?>">Adicionar livros</a></li>
		        	 <li class="li_atual"><a href="#">Doações dos usuários</a></li>
		        	 <li><a href="lista-usuarios.php?email=<?php echo $email; ?>">Lista dos usuários</a></li>
		       		        		        		        	 		        	 <li><a href="lista-pedidos.php?email=<?php echo $email; ?>">Lista de Pedidos</a></li>
		        			     <li><a href="lista-pendentes.php?email=<?php echo $email; ?>">Entregas Pendentes</a></li>
		         
		        
		        	 <li><a href="sobre-gerente.php?email=<?php echo $email; ?>">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
			
	
	   <!-- section de pesquisa -->
	<section class="container-fluid Lusu" id="pesquisar">
				<div class="text-center">
						<h3>pesquisar doações</h3>	
						<div class="container">
						 <div class="row justify-content-center mb-2">
						 	 <form method="POST" action="lista-doacoes.php?email=<?php echo $email; ?>">
						 		<input type="text" class="form-control mb-2" name="pesquisa" placeholder="pesquisar">	
						 		<button type="submit" class="btn btn-outline-secondary mb-2">
						 			<img src="img/lupa.png" width="20px">
						 				Pesquisar
						 		</button>
						 				</form>
						 </div>
						 				<h3 class="light text-center">Doações</h3>		
					
						<!-- relatório-->
										 		<a href="relatorio-doacoes.php?email=<?php echo $email; ?>"><button type="button" class="botaorelatorio btn mb-2">
						 			<img src="img/relatorio.png" width="20px">
						 	 Relatório
						 		</button></a>		
					
					
						 <div class="row tabela">
 		<table class="table table-hover striped centered responsive-table">
						 			<thead>
						 				<tr>
						 					<th scope="col">Nome:</th>
						 						<th scope="col">Email:</th>	
						 					<th scope="col">Data:</th>
						 			    <th scope="col">Hora:</th>
						 					<th scope="col">Título:</th>
						 		  <th scope="col">Autor:</th>
						 					<th scope="col">Gênero:</th>
						 				 <th scope="col">Quantidade:</th>						
						 				</tr>
						 					<th scope="col">Editar:</th>	
						 				<th scope="col">Confirmar:</th>
						 					<th scope="col">Excluir:</th>		
						 			</thead>
						 			<tbody>
						 						<?php
						 						
			include 'control/conexao.php';
						 						if(isset($_POST['pesquisa'])){
					   $pesquisa = $_POST['pesquisa'];
						 $sql = "Select doacoes.d_dataE, doacoes.d_horaE, doacoes.d_titulo, doacoes.d_autor, doacoes.d_genero, doacoes.d_quantidade, usuario.usu_nome, usuario.usu_email from doacoes, usuario where (doacoes.d_dataE like '%$pesquisa%' or doacoes.d_horaE like '%$pesquisa%' or doacoes.d_titulo like '%$pesquisa%' or doacoes.d_autor like '%$pesquisa%' or doacoes.d_genero like '%$pesquisa%' or doacoes.d_quantidade like '%$pesquisa%' or usuario.usu_nome like '%$pesquisa%' or usuario.usu_email like '%$pesquisa%') AND (doacoes.usu_codigo = usuario.usu_codigo) AND (usuario.usu_status != 1) AND (doacoes.d_confirmado != 1) AND (doacoes.d_excluido != 1)";			
						 										
						 						}else{
						 						
						 						$sql = "Select
				doacoes.d_codigo,doacoes.d_dataE, doacoes.d_horaE, doacoes.d_titulo, doacoes.d_autor, doacoes.d_genero, doacoes.d_quantidade, usuario.usu_nome, usuario.usu_email from usuario, doacoes where (doacoes.usu_codigo = usuario.usu_codigo) AND (usuario.usu_status != 1) AND (doacoes.d_confirmado != 1) AND (doacoes.d_excluido != 1)";
						 						}
						 						
						 						$resultado = mysqli_query($conexao, $sql);
						 						while($linha = $resultado -> fetch_assoc()){
						echo "<tr><td>".$linha['usu_nome']."</td><td>".$linha['usu_email']."</td><td>".$linha['d_dataE']."</td><td>".$linha['d_horaE']."</td><td>".$linha['d_titulo']."</td><td>".$linha['d_autor']."</td><td>".$linha['d_genero']."</td><td>".$linha['d_quantidade']."</td>
						
				  <td class='icon_usu'><a href='editar-doacao.php?email=".$linha['usu_email']."&d_codigo=".$linha['d_codigo']."&gemail=$email'><img class='cor' src='img/editar.png' width='20px'></a> </td>
				 
				  <td class='icon_usu'> <a href='lista-doacoes.php?email=$email&confdoacao=1&d_codigo=".$linha['d_codigo']."&usu_nome=".$linha["usu_nome"]."'><img class='cor' src='img/confirmar.png' width='20px'></a></td>	 
				  
		   <td class='icon_usu'> <a href='lista-doacoes.php?email=$email&confdelete=1&d_codigo=".$linha['d_codigo']."'><img class='cor' src='img/deletar.png' width='20px'></a></td>	
						
						</tr>";
						 										
			
						 						?>	
				    
     			

       <!-- fechando while-->
    	<?php					 						}
    	?>			
		 								
						 			</tbody>
						 							
						 		</table>		
						 </div>
						 
						  	
	    			</div>
							
</section>
	
  <!-- fechamento div main-->	
	
  </div>	

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
