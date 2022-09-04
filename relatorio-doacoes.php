<?php
  include "control/conexao.php";

   require_once 'dompdf/autoload.inc.php';


    use Dompdf\Dompdf;

    $dompdf= new Dompdf();


    $sql = "SELECT * FROM doacoes, usuario where usu_status = 0 AND usuario.usu_codigo = doacoes.usu_codigo";
    $resultado = mysqli_query($conexao, $sql);

    $html= "<h2 style='text-align: center'>Relatório De Doações (Bibliotecando)</h2><br>";
    $html .= "<table border='1'><tr style='font-weight:bold'><td>Número:</td><td>Nome:</td><td>Email:</td><td>Data:</td><td>Hora:</td><td>Titulo:</td><td>Autor:</td><td>Gênero:</td><td>Quantidade:</td></tr>";

    $cont = 1;

    while($linha = mysqli_fetch_assoc($resultado)){

    $html .= "<tr><td>".$cont."</td><td>".$linha['usu_nome']."</td><td>".$linha['usu_email']."</td><td>".$linha['d_dataE']."</td><td>".$linha['d_horaE']."</td><td>".$linha['d_titulo']."</td><td>".$linha['d_autor']."</td><td>".$linha['d_genero']."</td><td>".$linha['d_quantidade']."</td></tr>";

       $cont++;
    }


    $html .= "</table>";

    $dompdf->loadHtml($html);

    $dompdf->setPaper("A4", "portrait");
 
    $dompdf->render();

    $dompdf->stream("relatorio.pdf", array("Attachment"=>false));


   exit(0);
   
  

   
?>