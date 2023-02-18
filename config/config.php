<?php
#Caminhos abolutos
$dirInt="calendario/";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

// Banco de Dados
define('HOST','localhost');
define('DB','sistema');
define('USER','root');
define('PASS','');

// Incluir Arquivos
include(DIRREQ. '/lib/composer/vendor/autoload.php');

// print
// echo DIRPAGE. '<br>' .DIRREQ;