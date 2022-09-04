<?php

      $email = $_GET['email'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Fazer Doação | Bibliotecando</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">

 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>
<body>
				
				 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
       
       <script>
     $(function(){
    $(".button-collapse").sideNav(); });
    </script>
    
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
		             <li class="icon-usu"><img src="img/usuario.png" width="25%"></li>
		        	 <li><a href="cadastro_usuario_edite.php?email=<?php echo $email; ?>">Meu perfil</a></li>
		       
		       		         	 <li><a href="Notificacoes-usu.php?email=<?php echo $email; ?>">Notificações</a></li>
		        
	
		       
		        	 <li><a href="site-usuario.php?email=<?php echo $email; ?>">Início</a></li>
		        	 <li><a href="solicitarLivro.php?email=<?php echo $email; ?>">Livros</a></li>
		        	 <li class="li_atual"><a href="#">Doações</a></li>
		        	 <li><a href="sobre-usuario.php?email=<?php echo $email; ?>">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
				
	 

				
				
				<!-- form -->
	<section class="container-fluid cad-livro1" id="cadastrar">
				<div class="text-center">
								
				<div class="p_cad_liv"><p>	Detalhes da obra e entrega</p></div>
						
						<div class="container espacos-cad2">
							 <div class="row">
									<div class="col-lg-2">
											<img src="img/icon-cad.png" width="40%">		
									</div>	
									<div class="col-lg-10 espacos-cad2">
					
					 	<form method="POST" name="formDoacoes" enctype="multipart/form-data" action="control/SalvarDoacao.php">
					 
					 	<input type="hidden" class="form-control mb-2" name="email"
			    value="<?php echo $email; ?>"
			    placeholder="Seu email" required>
					 					
						<input type="text" class="form-control mb-2" name="titulo" placeholder="Título" required>
						
							<input type="text" class="form-control mb-2" name="autor" placeholder="Nome do autor" required>
							
						 	<input type="text" class="form-control mb-2" name="genero" placeholder="Gênero" required>
						
					  <input type="Number" class="form-control mb-2" name="quantidade" placeholder="Quantidade de exemplares" required>

        <?php
        
        $anoA = date('Y');
        $mesA = date('m');
        $diaA = date('d')+1;

        ?>
	
  				  
					  <label class="Label1">Informe a data da entrega:</label>
					  
					  <input type="date" class="form-control mb-2" name="data" min="<?php echo $anoA.'-'.$mesA.'-'.$diaA; ?>" required>
					    
					  <label class="Label1">Informe a hora da entrega:</label>
					  
					  <input type="time" class="form-control mb-2" name="hora" required>
					 
						<button type="submit" class="btn btn-info mb-2 btn-block">
									Agendar Doação
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
