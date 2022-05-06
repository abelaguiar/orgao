<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Todos os Fornecedores
            <p class="float-right">
                <a href="/fornecedor/cadastrar" class="btn btn-sm btn-success">Cadastrar</a>
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
                <?php foreach($data['fornecedores'] as $fornecedor) { ?>
                    <tr>
                        <td><?= $fornecedor->getId() ?></td>
                        <td><?= $fornecedor->getNome() ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="/fornecedor/<?= $fornecedor->getId() ?>" class="btn btn-sm btn-primary">
                                    Ver
                                </a>
                                <a href="/fornecedor/<?= $fornecedor->getId() ?>/editar" class="btn btn-sm btn-warning">
                                    Editar
                                </a>
                                <a href="/fornecedor/<?= $fornecedor->getId() ?>/excluir" class="btn btn-sm btn-danger">
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