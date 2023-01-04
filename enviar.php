<?php
    $to = 'operaciones@jcptoursperu.com';
    $place = $_POST["place"];
    $name = $_POST["name"];
    $email= $_POST["mail"];
    $count= $_POST["count"];
    $phone= $_POST["phone"];
    $date= $_POST["date"]; 
    

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $name . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.' desea una cotizacion. </td>
        </tr>
        <tr><td>Correo del interesado/a: '.$email.'</td></tr>
        <tr><td>Telf/celular: '.$phone.'</td></tr>
        <tr><td>Lugar que desea visitar: '.$place.'</td></tr>
        <tr><td>Para el: '.$date.'</td></tr>
        
        <tr><td>Cantidad de pasajeros: '.$count.'</td></tr>
        <tr><td></td></tr>
        <tr><td>El cliente quiere contactarse desde la pagina web www.jcptoursperu.com. </td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Tus datos fueron enviados, nos comunicaremos en breve.';
    }else{
        echo 'Fallo en el envío, favor comunicarse al 998 910 126';
    }

?>
