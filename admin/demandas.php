
<?php
require_once 'layout.php';

iniciarPagina("Demandas", "demandas");

$demandas = [
    ["nome" => "Sistema de cadastro", "unidade" => "Curitiba", "status" => "Ativa"],
    ["nome" => "Aplicativo de gestão", "unidade" => "Londrina", "status" => "Em andamento"],
    ["nome" => "Sistema de estoque", "unidade" => "Maringá", "status" => "Finalizada"]
];
?>

<h3>Lista de demandas</h3>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Unidade</th>
        <th>Status</th>
    </tr>

    <?php foreach ($demandas as $demanda) { ?>
        <tr>
            <td><?php echo $demanda["nome"]; ?></td>
            <td><?php echo $demanda["unidade"]; ?></td>
            <td><?php echo $demanda["status"]; ?></td>
        </tr>
    <?php } ?>
</table>

    <?php 
        finalizarPagina(); 
    ?>
