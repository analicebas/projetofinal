
<?php
function iniciarPagina($titulo, $paginaAtiva) {
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?> | GP 8</title>
</head>
<body>

<header>
    <h1>GP 8 - Grand Prix SENAI</h1>
    <nav>
        <a href="dashboard.php">Dashboard</a> |
        <a href="demandas.php">Demandas</a> |
        <a href="propostas.php">Propostas</a> |
        <a href="unidades.php">Unidades</a> |
        <a href="usuarios.php">Usuários</a>
    </nav>
</header>

<hr>

<main>
    <h2><?php echo $titulo; ?></h2>

<?php
}

function finalizarPagina() {
?>
</main>

<hr>

<footer>
    <p>GP 8 - Grand Prix SENAI</p>
</footer>

</body>
</html>
<?php
}
?>
