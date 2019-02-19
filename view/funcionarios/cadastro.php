<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/02/19
 * Time: 11:38
 */
?>

<form action="?route=funcionarios/create" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Funcionario" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Data Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Numero do Telefone" required>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<script>
    $(document).ready(function(){
        $("form").submit(function(event) {
            event.preventDefault();

            var nome = $('#nome').val();
            var dataNascimento = $('#data_nacimento').val();
            var cidade = $('#cidade').val();
            var telefone = $('#telefone').val();

            $.ajax({
                type: "POST",
                url: "?route=funcionarios/create",
                data: "nome=" + nome + "&data_nacimento=" + dataNascimento + "&cidade=" + cidade + "&telefone=" + telefone,
                success: function(){alert('success');}
            });
        });
    });
</script>

