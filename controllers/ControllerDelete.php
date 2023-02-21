<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$id=filter_input(INPUT_GET,'id', FILTER_DEFAULT);
$objEvents->deleteEvent($id);

// redireciona o usuário para a página inicial
header("Location: http://localhost/calendario/lib/html/sucesso.manager.php"); // substitua a barra com a URL da sua página inicial
exit();
