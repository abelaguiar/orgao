<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Usuário
            <p class="float-right">
                <a href="/usuarios" class="btn btn-sm btn-primary">Voltar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <td><b>ID</b></td>
                </tr>
                <tr>
                    <td><?= $data['usuario']->getId() ?></td>
                </tr>
                <tr>
                    <td><b>Nome</b></td>
                </tr>
                <tr>
                    <td><?= $data['usuario']->getNome() ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>