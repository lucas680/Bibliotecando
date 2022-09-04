<!-- aqui o Gerente edita dos dados dos usuários-->

<?php

      $gemail = $_GET['gemail'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Editar Cadastro | Bibliotecando</title>

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

        window.location.href = 'cadastro_edite.php?email=$email&nome=$nome&gemail=$gemail'; 

});
				   
				</script>";
              }
              
              
              ?>
              
              
              
				<?php
					
				include 'control/conexao.php';
				
		    $email = $_GET['email'];
		    $nome = $_GET['nome'];
	

        $escola = "SELECT usu_escola FROM `usuario` WHERE `usu_email` LIKE '$email'";
        $serie = "SELECT usu_serie FROM `usuario` WHERE `usu_email` LIKE '$email'";
        $curso = "SELECT usu_curso FROM `usuario` WHERE `usu_email` LIKE '$email'";
        $cidade = "SELECT usu_cidade FROM `usuario` WHERE `usu_email` LIKE '$email'";
        $bairro = "SELECT usu_bairro FROM `usuario` WHERE `usu_email` LIKE '$email'";
        $rua = "SELECT usu_rua FROM `usuario` WHERE `usu_email` LIKE '$email'";
        $numeroCasa = "SELECT usu_Ncasa FROM `usuario` WHERE `usu_email` LIKE '$email'";
        $senha = "SELECT usu_senha FROM `usuario` WHERE `usu_email` LIKE '$email'";
        
    	   
				$escola = mysqli_query($conexao, $escola);
				$serie = mysqli_query($conexao, $serie);
				$curso = mysqli_query($conexao, $curso);
				$cidade = mysqli_query($conexao, $cidade);
				$bairro = mysqli_query($conexao, $bairro);
				$rua = mysqli_query($conexao, $rua);
				$numeroCasa = mysqli_query($conexao, $numeroCasa);
				$senha = mysqli_query($conexao, $senha);
				
				
				$escola = mysqli_fetch_assoc($escola);
	$escola = $escola['usu_escola'];
	$serie = mysqli_fetch_assoc($serie);
	$serie = $serie['usu_serie'];
	$curso = mysqli_fetch_assoc($curso);
	$curso = $curso['usu_curso'];
	$cidade = mysqli_fetch_assoc($cidade);
	$cidade = $cidade['usu_cidade'];
	$bairro = mysqli_fetch_assoc($bairro);
	$bairro = $bairro['usu_bairro'];
	$rua = mysqli_fetch_assoc($rua);
	$rua = $rua['usu_rua'];
	$numeroCasa = mysqli_fetch_assoc($numeroCasa);
	$numeroCasa = $numeroCasa['usu_Ncasa'];
	$senha = mysqli_fetch_assoc($senha);
	$senha = $senha['usu_senha'];

		
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
						<h3 class="cad">Seus dados</h3>
						<div class="container espacos-cad2">
							 <div class="row">
									<div class="col-lg-2">
											<img src="img/icon-cad.png" width="30%">		
									</div>	
									<div class="col-lg-10 espacos-cad2">
				
				<form method="POST" action="control/editar-usuario.php">
				 
								    						<input type="hidden" class="form-control mb-2" name="nomeAT" value="<?php echo $nome; ?>" placeholder="Seu nome" required>
				    
			  			
		  						<input type="hidden" class="form-control mb-2" name="emailAT" value="<?php echo $email; ?>" placeholder="Email do usuário" required>
		  						<input type="hidden" class="form-control mb-2" name="gemail" value="<?php echo $gemail; ?>" placeholder="Email do gerente" required>
		  						
				    
						<input type="text" class="form-control mb-2" name="nome" value="<?php echo $nome; ?>" placeholder="Seu nome" required>
					  <input type="email" class="form-control mb-2" name="email" value="<?php echo $email; ?>" placeholder="Seu email" required>
				    
				    	<input type="text" class="form-control mb-2" name="escola" value="<?php echo $escola; ?>" placeholder="Sua Escola" required>
				    	
				     <select class="selectcad input-field mb-2" name="serie" required>
				    					<option value="" disabled selected>Série</option>
				    					<option value="1" <?php if($serie == 1){
				    									echo 'Selected';
				    					}?>>1° ano</option>
				    					<option value="2" <?php if($serie == 2){
				    									echo 'Selected';
				    					}?>>2° ano</option>
				    					<option value="3" <?php if($serie == 3){
				    									echo 'Selected';
				    					}?>>3° ano</option>	    					
				    	</select>
				    	
				    	<select class="selectcad input-field mb-2 icons" name="curso" required>
				    					<option value="" disabled selected>Curso</option>
				    					<option value="informática" <?php if($curso == 'informática'){
				    									echo 'Selected';
				    					}?> data-icon="img/informatica.png">Informática</option>
				    					<option value="enfermagem" <?php if($curso == 'enfermagem'){
				    									echo 'Selected';
				    					}?> data-icon="img/enfermagem.png">Enfermagem</option>
				    					<option value="finanças" <?php if($curso == 'finanças'){
				    									echo 'Selected';
				    					}?> data-icon="img/financas.png">Finanças</option>
				    					<option value="agropecuária" <?php if($curso == 'agropecuária'){
				    									echo 'Selected';
				    					}?> data-icon="img/agropecuaria.png">Agropecuária</option>
				    					
				    	</select>
				 					  
           <input type="text" class="form-control mb-2" name="cidade" value="<?php echo $cidade; ?>" placeholder="Sua cidade" required>
            <input type="text" class="form-control mb-2" name="bairro" value="<?php echo $bairro; ?>" placeholder="Seu bairro" required>
             <input type="text" class="form-control mb-2" name="rua" value="<?php echo $rua; ?>" placeholder="Sua rua" required>
              <input type="number" class="form-control mb-2" name="numeroCasa" value="<?php echo $numeroCasa; ?>" placeholder="Número da sua casa" required>
               <input type="password" class="form-control mb-2" name="senha" placeholder="Senha" required pattern="^.{8,12}$" title="8 a 12 caracteres" minlength="8" maxlength="12">
						
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
