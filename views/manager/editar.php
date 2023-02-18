<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<header>
  <a class="back-button" onclick="location.href='<?php echo DIRPAGE.'views/manager'; ?>'" >&larr; Voltar</a>  
  <a href="<?php echo DIRPAGE; ?>">Empresa de Educação</a>
</header>

<?php
$objEvents = new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);
$date = new \DateTime($events['start']);
?>


<form name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'controllers/ControllerEdit.php'; ?>" >
  <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>
  <label for="date">Data:</label>
  <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
  <label for="time">Hora:</label>
  <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
  <label for="title">Paciente:</label>
  <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
  <label for="description">Queixa:</label>
  <input type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>
  <input class="buttonsubmit" type="submit" value="Confirmar Consulta" >
</form>


<a id="delete" href="<?php echo DIRPAGE.'controllers/ControllerDelete.php?id='.$_GET['id']; ?>">
  <img src="<?php echo DIRPAGE.'img/remover.png' ?>" alt="Remover">
</a>

<?php include(DIRREQ."lib/html/footer.php"); ?>
