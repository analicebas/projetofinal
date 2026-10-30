
<?php
require_once 'layout.php';

iniciarPagina("Usuários", "usuarios");

$usuarios = [
    ["nome" => "Ana", "tipo" => "Aluno"],
    ["nome" => "Sebastian", "tipo" => "Aluno"],
    ["nome" => "Nathaly", "tipo" => "Aluno"],
    ["nome" => "Professor", "tipo" => "Professor"],
    ["nome" => "Organização", "tipo" => "Organização"]
];
?>

<h3>Usuários cadastrados</h3>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Tipo de usuário</th>
    </tr>

    <?php foreach ($usuarios as $usuario) { ?>
        <tr>
            <td><?php echo $usuario["nome"]; ?></td>
            <td><?php echo $usuario["tipo"]; ?></td>
        </tr>
    <?php } ?>
</table>

<?php 
finalizarPagina(); 
?>
