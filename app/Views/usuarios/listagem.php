<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Todas os Usuários
            <p class="float-right">
                <a href="/usuario/cadastrar" class="btn btn-sm btn-success">Cadastrar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['usuarios'] as $usuario) { ?>
                    <tr>
                        <td><?= $usuario->getId() ?></td>
                        <td><?= $usuario->getNome() ?></td>
                        <td><?= $usuario->getEmail() ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="/usuario/<?= $usuario->getId() ?>" class="btn btn-sm btn-primary">
                                    View
                                </a>
                                <a href="/usuario/<?= $usuario->getId() ?>/editar" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                <a href="/usuario/<?= $usuario->getId() ?>/excluir" class="btn btn-sm btn-danger">
                                    Delete
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