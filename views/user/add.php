<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<header>
        <a class="back-button" onclick="location.href='<?php echo DIRPAGE.'views/user'; ?>'" >&larr; Voltar</a>  
        <a href="<?php echo DIRPAGE; ?>">Empresa de Educação</a>
</header>

<?php
$date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));
?>

<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'; ?>" >
    <label for="date">Data:</label>
    <input required type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>">
    <br>

    <label for="time">Hora:</label>
    <input required type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>">
    <br>

    <label for="title">Paciente:</label>
    <input required type="text" name="title" id="title">
    <br>

    <label for="description">Queixa:</label>
    <input required type="text" name="description" id="description">
    <br>

    <label for="horasAtendimento">Quanto tempo deseja de atendimento:</label>
    <select  required name="horasAtendimento" id="horasAtendimento">
        <option value="">Selecione</option>
        <option value="1">1h</option>
        <option value="2">2h</option>
        <option value="3">3h</option>
    </select>
    <br>

    <input class="button-submit" type="submit" value="Marcar Consulta" >
</form>

<?php include(DIRREQ."lib/html/footer.php"); ?>
