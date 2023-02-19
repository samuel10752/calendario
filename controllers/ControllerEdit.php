<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$date=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$time=filter_input(INPUT_POST,'time',FILTER_DEFAULT);
$id=filter_input(INPUT_POST,'id',FILTER_DEFAULT);
$title=filter_input(INPUT_POST,'title',FILTER_DEFAULT);
$description=filter_input(INPUT_POST,'description',FILTER_DEFAULT);
$start=new \DateTime($date.''.$time, new \DateTimeZone('America/Sao_Paulo'));

$objEvents->updateEvent(
    $id,
    $title,
    $description,
    $start->format("Y-m-d H:i:s")
);

// redireciona o usuário para a página inicial
header("Location: http://localhost/calendario/lib/html/sucesso.manager.php"); // substitua a barra com a URL da sua página inicial
exit();