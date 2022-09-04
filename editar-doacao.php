<!-- aqui o Gerente edita os dados das doações-->


<?php

      $gemail = $_GET['gemail'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Editar Doação | Bibliotecando</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">

 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>
<body>
    
              <!-- verificar email -->
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
     
              $ve = $_GET['ve'];
     
            $email = $_GET['email'];
            $nome = $_GET['nome'];
              
              if($ve == 1){
                  echo "
                  <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>
                  <script>
                  
				   swal({

  title: 'Bibliotecando',
  text: 'Email já registrado em outra conta!',
  icon: 'error',
  button: 'ok',

}).then((willDelete) => {

        window.location.href = 'cadastro_edite.php?email=$email&nome=$nome'; 

});
				   
				</script>";
              }
              
              
              ?>
              
              
              
				<?php
					
				include 'control/conexao.php';
				
		    $email = $_GET['email'];
		    $d_codigo = $_GET['d_codigo'];
	
	      $codigo = "SELECT usu_codigo FROM `usuario` WHERE `usu_email` LIKE '$email'";  	   
				$codigo = mysqli_query($conexao, $codigo);							
				$codigo = mysqli_fetch_assoc($codigo);
	$codigo = $codigo['usu_codigo'];


        $data = "SELECT d_dataE FROM `doacoes` WHERE `usu_codigo` LIKE '$codigo'";  	   
				$data = mysqli_query($conexao, $data);							
				$data = mysqli_fetch_assoc($data);
	$data = $data['d_dataE'];
	
	  
	  $hora = "SELECT d_horaE FROM `doacoes` WHERE `usu_codigo` LIKE '$codigo'";  	   
				$hora = mysqli_query($conexao, $hora);							
				$hora = mysqli_fetch_assoc($hora);
	$hora = $hora['d_horaE'];
	
		
				 ?>	
				 
				 
				 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
       
       <script>
     $(function(){
    $(".button-collapse").sideNav(); });
    </script>
    
    
    
       <!-- iniciar jquery select-->
    
    <script>
      $(document).ready(function(){
    $('select').material_select();
  });  
    </script>
    
				
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
		        	 <li><a href="cadastrar-livro.php?email=<?php echo $gemail; ?>">Cadastrar livros</a></li>
		        	 <li><a href="lista-doacoes.php?email=<?php echo $gemail; ?>">Doações dos usuários</a></li> <li><a href="lista-usuarios.php?email=<?php echo $gemail; ?>">Lista dos usuários</a></li>
		      		        		        		        	 		        	 <li><a href="lista-pedidos.php?email=<?php echo $gemail; ?>">Lista de Pedidos</a></li>
		        			     <li><a href="lista-pendentes.php?email=<?php echo $gemail; ?>">Entregas Pendentes</a></li>
		        
		         <li><a href="sobre-gerente.php?email=<?php echo $gemail; ?>">Sobre</a></li>
		        	  <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
				
				
				<!-- form -->
	<section class="container-fluid espacos-cad" id="cadastrar">
				<div class="text-center">
						<h3 class="cad">Dados da doação</h3>
						<div class="container espacos-cad2">
							 <div class="row">
									<div class="col-lg-2">
											<img src="img/icon-cad.png" width="30%">		
									</div>	
									<div class="col-lg-10 espacos-cad2">
				
				<form method="POST" action="control/editar-doacao.php">		    
		 	    <input type="hidden" class="form-control mb-2" name="gemail" value="<?php echo $gemail; ?>" placeholder="Email do gerente" required>
		  						<input type="hidden" class="form-control mb-2" name="codigo" value="<?php echo $d_codigo; ?>" placeholder="Codigo Da Doacao" required>
		  						
		  						        <?php
        
        $anoA = date('Y');
        $mesA = date('m');
        $diaA = date('d')+1;

        ?>
	
  				  
					  <label class="Label1">Modifique a data da entrega:</label>
					  
					  <input type="date" class="form-control mb-2" name="data" min="<?php echo $anoA.'-'.$mesA.'-'.$diaA; ?>" value="<?php echo $data; ?>" required>
					    
					  <label class="Label1">Modifique a hora da entrega:</label>
					  
					  <input type="time" class="form-control mb-2" name="hora" value="<?php echo $hora; ?>" required>
					 

						
						<button type="submit" class="btn btn-info mb-2 btn-block">
										Editar
						</button>
						
								
				</form>

				
		    </div>
		   </div>
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
</div>
  
</body>

</html>
