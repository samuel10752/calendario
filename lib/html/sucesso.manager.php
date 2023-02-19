<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Feito com Sucesso!</title>
</head>
<body>

<header>
        <a href="<?php echo DIRPAGE; ?>">Empresa de Educação</a>
</header>


    <div class="container">
        <h1>Feito com Sucesso!</h1>
        <p>Seu cadastro foi realizado com sucesso.</p>
        <a href="<?php echo DIRPAGE.'/views/manager/'; ?>" class="back-button">&larr; Voltar</a>  
    </div>


    <style>

    
        /* Tela de cadastro feito com sucesso */

.container {
    
    max-width: 2000px;
    margin: 0 auto;
    text-align: center;
    padding: 40px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f8f8f8;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

p {
    font-size: 20px;
    margin-bottom: 40px;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    font-size: 20px;
    transition: all 0.3s ease;
}

.button:hover {
    background-color: #0062cc;
}

    </style>


<?php include(DIRREQ."lib/html/footer.php"); ?>


</body>
</html>
