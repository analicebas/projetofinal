
<?php
require_once 'layout.php';

iniciarPagina("Dashboard", "dashboard");

$usuarios = 248;
$demandas = 32;
$propostas = 86;
$unidades = 6;
?>

<h3>Resumo do sistema</h3>

<p>Total de usuários: <?php echo $usuarios; ?></p>
<p>Demandas cadastradas: <?php echo $demandas; ?></p>
<p>Propostas enviadas: <?php echo $propostas; ?></p>
<p>Unidades cadastradas: <?php echo $unidades; ?></p>

<h3>Bem-vindo à área administrativa!</h3>
<p>Aqui você pode acompanhar as atividades do GP 8.</p>

<?php 
finalizarPagina(); 
?>
