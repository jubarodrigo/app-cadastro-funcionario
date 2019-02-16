<div class="container">
    <?php
    require_once 'autoloader.php';
    session_start();

    use src\Controller\Funcionario as Funcionario;
    $funcionario = new Funcionario();

    use src\View\container\View as View;

    if (!isset($_GET['route'])){
        $_GET['route'] = "home";
    }
    switch ($_GET['route']) {
        case 'funcionarios/listar':
            View::render(null,"./src/View/funcionarios/lista.php");
            break;

        case 'funcionarios/cadastro':
            View::render(null,"./src/View/funcionarios/cadastro.php");
            break;

        case 'funcionarios/create':
            View::render($funcionario->salvar(),"./src/View/funcionarios/cadastro.php");
            break;
    }
    ?>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="./public/assets/components/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
</html>