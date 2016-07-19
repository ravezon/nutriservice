<?php

    $to = "ravezon@gmail.com";
    $from = $_REQUEST['contact_name'];
    $name = $_REQUEST['contact_email'];
    $headers = "De: $from";
    $subject = "Nuevo mensaje desde la web" . $from;

    $fields = array();
    $fields{"Nombre"} = "contact_name";
    $fields{"Apellido"} = "contact_lname";
    $fields{"Email"} = "contact_email";
    $fields{"Telefono"} = "contact_phone";
	$fields{"Solicitud"} = "contact_sol";
    $fields{"Mensaje"} = "contact_texts";

    $body = "Esto se ha enviado:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
