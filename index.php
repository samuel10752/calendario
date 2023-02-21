<?php include("config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<header>
        <a href="<?php echo DIRPAGE; ?>">Empresa de Educação</a>
</header>

    <div class="container">
        <div class="buttons">
            <button class="button" onclick="location.href='<?php echo DIRPAGE.'views/user'; ?>'">Calendário do Usuário</button>
            <button class="button" onclick="location.href='<?php echo DIRPAGE.'views/manager'; ?>'">Calendário do Gerente</button>
            <button class="button" onclick="location.href='<?php echo DIRPAGE.'views/selectable'; ?>'">Calendário Varias datas</button>
            <button class="button" onclick="location.href='<?php echo DIRPAGE.'views/dropandresize'; ?>'">Arrastando e Redimensionando Eventos</button>
        </div>
    </div>

<?php include(DIRREQ."lib/html/foote.php"); ?>

