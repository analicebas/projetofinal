
<?php
require_once 'layout.php';

iniciarPagina("Propostas", "propostas");

$propostas = [
    ["aluno" => "Ana", "projeto" => "Sistema de cadastro", "status" => "Pendente"],
    ["aluno" => "Sebastian", "projeto" => "Aplicativo de gestão", "status" => "Aprovada"],
    ["aluno" => "Nathaly", "projeto" => "Sistema de estoque", "status" => "Em análise"]
];
?>

<h3>Propostas enviadas</h3>

<table border="1">
    <tr>
        <th>Aluno</th>
        <th>Projeto</th>
        <th>Status</th>
    </tr>

    <?php foreach ($propostas as $proposta) { ?>
        <tr>
            <td><?php echo $proposta["aluno"]; ?></td>
            <td><?php echo $proposta["projeto"]; ?></td>
            <td><?php echo $proposta["status"]; ?></td>
        </tr>
    <?php } ?>
</table>

<?php 
finalizarPagina();
 ?>
