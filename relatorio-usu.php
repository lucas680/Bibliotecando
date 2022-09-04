
<?php
  include "control/conexao.php";

   require_once 'dompdf/autoload.inc.php';


    use Dompdf\Dompdf;

    $dompdf= new Dompdf();


    $sql = "SELECT * FROM usuario where usu_status = 0 order by usu_serie, usu_curso asc";
    $resultado = mysqli_query($conexao, $sql);

    $html= "<h2 style='text-align: center'>Relatório De Usuários (Bibliotecando)</h2><br>";
    $html .= "<table border='1'><tr style='font-weight:bold'><td>Número:</td><td>Nome:</td><td>Email:</td><td>Escola:</td><td>Série:</td><td>Curso:</td></tr>";

    $cont = 1;

    while($linha = mysqli_fetch_assoc($resultado)){

    $html .= "<tr><td>".$cont."</td><td>".$linha['usu_nome']."</td><td>".$linha['usu_email']."</td><td>".$linha['usu_escola']."</td><td>".$linha['usu_serie']."</td><td>".$linha['usu_curso']."</td></tr>";

       $cont++;
    }


    $html .= "</table>";

    $dompdf->loadHtml($html);

    $dompdf->setPaper("A4", "portrait");
 
    $dompdf->render();

    $dompdf->stream("relatorio.pdf", array("Attachment"=>false));


   exit(0);
   
  

   
?>

