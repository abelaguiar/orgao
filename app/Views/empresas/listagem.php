<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Todas as Empresas
            <p class="float-right">
                <a href="/empresa/cadastrar" class="btn btn-sm btn-success">Cadastrar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['empresas'] as $empresa) { ?>
                    <tr>
                        <td><?= $empresa->getId() ?></td>
                        <td><?= $empresa->getNome() ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="/empresa/<?= $empresa->getId() ?>" class="btn btn-sm btn-primary">
                                    Ver
                                </a>
                                <a href="/empresa/<?= $empresa->getId() ?>/editar" class="btn btn-sm btn-warning">
                                    Editar
                                </a>
                                <a href="/empresa/<?= $empresa->getId() ?>/excluir" class="btn btn-sm btn-danger">
                                    Excluir
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>