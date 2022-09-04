<!-- aqui o gerente poderá ver a lista dos usuários cadastrados, desativar ou editar os dados dos mesmos -->

<?php

      $email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Lista De Usuários | Bibliotecando</title>

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
			 swal('Bibliotecando', 'Conta desativada com sucesso!', 'success');	
				</script>";
    }
    
    
    ?>
				
				 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
       
       <script>
     $(function(){
    $(".button-collapse").sideNav(); });
    </script>


				<!--quando o gerente editar um usuario-->
				
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
				
			<!-- confirmar delete-->	
				<?php
				
				$emailx = $_GET['usu_email'];
			
		if($emailx != null){
				
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>"."<script>
				swal({
          title: 'Bibliotecando',
              text: 'Deseja realmente desativar a conta de $emailx?',
                    icon: 'warning',
                            buttons: ['Cancelar', 'Desativar'],
                                      dangerMode: true,
                                      }).then((willDelete) => {
                                        if (willDelete) {
        window.location.href = 'control/deletar.php?email=$emailx&gemail=$email';  
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
		        	 <li><a href="site-gerente.php?email=<?php echo $email; ?>">Início</a></li>
		        	 <li><a href="cadastrar-livro.php?email=<?php echo $email; ?>">Adicionar livros</a></li>
		        	 <li><a href="lista-doacoes.php?email=<?php echo $email; ?>">Doações dos usuários</a></li>
		        	 <li class="li_atual"><a href="#">Lista dos usuários</a></li>
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
						<h3>pesquisar usuários</h3>
						
						<div class="container">
						 <div class="row justify-content-center mb-2">
						 	 <form method="POST" action="lista-usuarios.php?email=<?php echo $email; ?>">
						 		<input type="text" class="form-control mb-2" name="pesquisa" placeholder="pesquisar">	
						 		<button type="submit" class="btn btn-outline-secondary mb-2">
						 			<img src="img/lupa.png" width="20px">
						 				Pesquisar
						 		</button>
						 		
						 				</form>
				
				
						 </div>
						 				<h3 class="light text-center">Usuários</h3>		
						 					    						 				
				<!-- relatório-->
										 		<a href="relatorio-usu.php?email=<?php echo $email; ?>"><button type="button" class="botaorelatorio btn mb-2">
						 			<img src="img/relatorio.png" width="20px">
						 	 Relatório
						 		</button></a>		
						 				
						 <div class="row tabela">
 		<table class="table table-hover striped centered responsive-table">
						 			<thead>
						 				<tr>
						 					<th scope="col">Nome:</th>
						 					<th scope="col">Email:</th>
						 			  <th scope="col">Serie:</th>
						 					<th scope="col">Curso:</th>
						 		<th scope="col">Editar:</th>
						 					<th scope="col">Desativar:</th>						
						 				</tr>					
						 			</thead>
						 			<tbody>
						 						<?php
						 						
			include 'control/conexao.php';
						 						if(isset($_POST['pesquisa'])){
					   $pesquisa = $_POST['pesquisa'];
					   
				
				$seriex = $pesquisa;
				settype($seriex, "integer");
				
                if($seriex == $pesquisa && $seriex < 4 && $seriex > 0){
             
              					   
						 $sql = "Select usu_nome, usu_email, usu_serie, usu_curso from usuario where (usu_nome like '%$pesquisa%' AND usu_status = 0) or (usu_serie like '%$pesquisa%' AND usu_status = 0) or (usu_escola like '%$pesquisa%' AND usu_status = 0) or (usu_curso like '%$pesquisa%' AND usu_status = 0)";
						 
                    
                }else{
				
					   
						 $sql = "Select usu_nome, usu_email, usu_serie, usu_curso from usuario where (usu_nome like '%$pesquisa%' AND usu_status = 0) or (usu_email like '%$pesquisa%' AND usu_status = 0) or (usu_serie like '%$pesquisa%' AND usu_status = 0) or (usu_escola like '%$pesquisa%' AND usu_status = 0) or (usu_curso like '%$pesquisa%' AND usu_status = 0)";
						 
                }		 										
						 						}else{
						 						
						 						$sql = "Select usu_nome, usu_email, usu_serie, usu_curso from usuario where usu_status = 0";
						 						}
						 						
						 						$resultado = mysqli_query($conexao, $sql);
						 						while($linha = $resultado -> fetch_assoc()){
		
						echo "<tr><td>".$linha['usu_nome']."</td><td>".$linha['usu_email']."</td><td>".$linha['usu_serie']."</td><td>".$linha['usu_curso']."</td>
						
				  <td class='icon_usu'><a href='cadastro_edite.php?nome=".$linha['usu_nome']."&email=".$linha['usu_email']."&gemail=$email'><img class='cor' src='img/editar.png' width='20px'></a> </td>
		   <td class='icon_usu'> <a href='lista-usuarios.php?usu_email=".$linha['usu_email']."&email=$email'><img class='cor' src='img/deletar.png' width='20px'></a></td>	
						
						</tr>";
	

     ?>
    
			    

    
     
     <?php
      /* fechamento do while*/
						 	
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
