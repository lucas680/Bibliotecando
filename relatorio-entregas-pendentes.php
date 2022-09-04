<?php
  include "control/conexao.php";

   require_once 'dompdf/autoload.inc.php';


    use Dompdf\Dompdf;

    $dompdf= new Dompdf();


    $sql = "SELECT * FROM pedidos, usuario, Livros where usu_status = 0 AND usuario.usu_codigo = pedidos.usu_codigo AND Livros.l_codigo = pedidos.l_codigo AND pedidos.p_confEntrega = 0";
    $resultado = mysqli_query($conexao, $sql);

    $html= "<h2 style='text-align: center'>Relatório De Entregas Pendentes (Bibliotecando)</h2><br>";
    $html .= "<table border='1'><tr style='font-weight:bold'><td>Número:</td><td>Nome:</td><td>Email:</td><td>Livro:</td><td>Data:</td><td>Hora:</td><td>Data da entrega:</td></tr>";

    $cont = 1;

    while($linha = mysqli_fetch_assoc($resultado)){

    $html .= "<tr><td>".$cont."</td><td>".$linha['usu_nome']."</td><td>".$linha['usu_email']."</td><td>".$linha['l_titulo']."</td><td>".$linha['p_databusca']."</td><td>".$linha['p_horabusca']."</td><td>".$linha['p_dataE']."</td></tr>";

       $cont++;
    }


    $html .= "</table>";

    $dompdf->loadHtml($html);

    $dompdf->setPaper("A4", "portrait");
 
    $dompdf->render();

    $dompdf->stream("relatorio.pdf", array("Attachment"=>false));


   exit(0);
   
  

   
?>