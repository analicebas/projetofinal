
<?php
require_once 'layout.php';

iniciarPagina("Unidades", "unidades");

$unidades = [
    "Curitiba",
    "Londrina",
    "Maringá",
    "Ponta Grossa",
    "Cascavel",
    "São José dos Pinhais"
];
?>

<h3>Unidades cadastradas</h3>

<ul>
    <?php foreach ($unidades as $unidade) { ?>
        <li><?php echo $unidade; ?></li>
    <?php } ?>
</ul>

<?php 
finalizarPagina();
 ?>
