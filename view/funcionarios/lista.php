<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/02/19
 * Time: 11:38
 */

use src\Controller\Funcionario as Funcionario;

$funcionario = new Funcionario();
$funcionarios = $funcionario->listar();

?>

<div style="padding: 10px">
    <h3>Funcionarios</h3>
</div>


<div class="">
    <table id="grid_listagem" class="table table-striped" cellspacing="0" width="100%" style="white-space: nowrap;">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Data Nascimento</th>
            <th>Cidade</th>
            <th>Telefone</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario) : ?>
                <tr>
                    <td><?= $funcionario['id'] ?></td>
                    <td><?= $funcionario['nome'] ?></td>
                    <td><?= $funcionario['data_nascimento'] ?></td>
                    <td><?= $funcionario['cidade'] ?></td>
                    <td><?= $funcionario['telefone'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




