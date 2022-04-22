<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
       <h5 class="card-title">
            Empresa
            <p class="float-right">
                <a href="/empresas" class="btn btn-sm btn-primary">Voltar</a>
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
                    <td><?= $data['empresa']->getId() ?></td>
                </tr>
                <tr>
                    <td><b>Nome</b></td>
                </tr>
                <tr>
                    <td><?= $data['empresa']->getNome() ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>