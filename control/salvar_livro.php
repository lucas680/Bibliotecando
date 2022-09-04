<?php
include "conexao.php";

if(isset($_POST['titulo'])){
            $emailAT = $_POST['gemail'];
			$titulo = $_POST['titulo'];
			$autor = $_POST['autor'];
			$genero = $_POST['genero'];
			$ano = $_POST['ano'];
			if($ano == NULL){
			    $ano = 0;
			}
			$quantidade = $_POST['quantidade'];
			$sinopse = $_POST['sinopse'];
			$arquivo = $_POST['arquivo'];
			
			$caminho = "../livros/";
			$nomeArq = md5(basename($_FILES['arquivo']['name']));
			$caminho = $caminho.$nomeArq;
			
			if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminho)){
				
	    
					$sql = "INSERT INTO `Livros` (`l_imagem`, `l_titulo`, `l_autor`, `l_genero`, `l_ano`, `l_sinopse`, `l_quantidade`, `l_Ndisponiveis`) VALUES ('$caminho', '$titulo', '$autor', '$genero', '$ano', '$sinopse', '$quantidade', '$quantidade');";
					
					mysqli_query($conexao, $sql);
					
					echo "<script>
		
						location.href='../cadastrar-livro.php?lcad=1&email=$emailAT';
					
							
		</script>";
							
			}else{
					echo "<script>
						
						location.href='../cadastrar-livro.php?lcad=2&email=$emailAT';
					
				</script>";
			}
			
				
}



?>
