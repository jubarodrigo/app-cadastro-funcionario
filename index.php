<?php

require_once 'autoloader.php';

use src\Controller\Funcionario as Funcionario;
$funcionarios = new Funcionario();

?>

<?php include ('src/View/container/top.php'); ?>

<div class="thumbnail">
    <div class="caption">
        <h3>Funcionarios</h3>
        <table id="grid_listagem" class="table" cellspacing="0" width="100%" style="white-space: nowrap;">
            <thead>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>Cidade</th>
                <th>Telefone</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($funcionarios as $funcionario) : ?>
                        <td><?= $funcionario['nome'] ?></td>
                        <td><?= $funcionario['data_nascimento'] ?></td>
                        <td><?= $funcionario['cidade'] ?></td>
                        <td><?= $funcionario['telefone'] ?></td>
                    <?php endforeach;?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>

</script>
<?php include ('src/View/container/bottom.php'); ?>
