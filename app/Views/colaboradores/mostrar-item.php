<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Colaborador
            <p class="float-right">
                <a href="/colaboradores" class="btn btn-sm btn-primary">Voltar</a>
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
                    <td><?= $data['colaborador']->getId() ?></td>
                </tr>
                <tr>
                    <td><b>Nome</b></td>
                </tr>
                <tr>
                    <td><?= $data['colaborador']->getNome() ?></td>
                </tr>
                <tr>
                    <td><b>Empresa</b></td>
                </tr>
                <tr>
                    <td><?= $data['colaborador']->getEmpresa()->getNome() ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>