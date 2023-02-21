<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$idEvent = $_POST['id'];
$start = new \DateTime($_POST['start'], new \DateTimeZone('America/Sao_Paulo'));
$end = new \DateTime($_POST['end'], new \DateTimeZone('America/Sao_Paulo'));
$objEvents->updateDropEvent(
    $idEvent,
    $start->format(("Y-m-d H:i:s")),
    $end->format(("Y-m-d H:i:s"))
);

// redireciona o usuário para a página inicial
header("Location: http://localhost/calendario/lib/html/sucesso.manager.php"); // substitua a barra com a URL da sua página inicial
exit();