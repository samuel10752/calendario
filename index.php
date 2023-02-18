<?php include("config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<header>
        <a href="<?php echo DIRPAGE; ?>">Empresa de Educação</a>
</header>

    <div class="container">
        <div class="buttons">
            <button class="button" onclick="location.href='<?php echo DIRPAGE.'views/user'; ?>'">Calendário do Usuário</button>
            <button class="button" onclick="location.href='<?php echo DIRPAGE.'views/manager'; ?>'">Calendário do Gerente</button>
        </div>
    </div>

<?php include(DIRREQ."lib/html/footer.php"); ?>

