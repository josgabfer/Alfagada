<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
function fetch_data()
{
    $html_string = '';
    if (!empty($_SESSION["carrito"])) {
        foreach ($_SESSION["carrito"] as $keys => $values) {
            $html_string .= '<tr>  
                <td>' . $values["nombreProducto"] . '</td>  
                <td>' . $values["precioProducto"] . '</td>  
                <td>' . $values["cantidadProducto"] . '</td>  
                <td>' . $values["totalProducto"] . '</td>  
                </tr>';
        }
        return $html_string;
    }
}
$content = '';
$content .= '  
     <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
     <table border="1" cellspacing="0" cellpadding="5">  
          <tr>  
               <th width="5%">Producto</th>  
               <th width="30%">Precio</th>  
               <th width="10%">Cantidad</th>  
               <th width="45%">Total</th>  
          </tr>  
     ';




if (isset($_POST["crear_factura"])) {
    require_once('TCPDF-main/TCPDF-main/tcpdf.php');


    //Crear obj TCPDF
    $pdf = new TCPDF('p', 'mm', 'A4');

    //Pagina
    $pdf->AddPage();

    //Contenido

    //HTML
    $pdf->Rect(0, 0, 2000, 20, 'F', array(), array(46, 61, 89));
    $pdf->Image("Resources/imgs/ALFAGADA.png", 10, 5, 50, 10);
    //Output

    $content .= fetch_data();
    $content .= '</table>';
    $pdf->writeHTML($content, true, false, false, false, '');
    $test -> writeHTML('Hola Mundo', true, false, false, false, '');
    $pdf->Output('Factura.pdf', 'I');
}
?>