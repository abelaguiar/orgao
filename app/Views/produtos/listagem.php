<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Todas os Produtos
            <p class="float-right">
                <a href="/produto/cadastrar" class="btn btn-sm btn-success">Cadastrar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Valor</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['produtos'] as $produto) { ?>
                    <tr>
                        <td><?= $produto->getId() ?></td>
                        <td><?= $produto->getNome() ?></td>
                        <td><?= $produto->getValor() ?></td>

                        <td>
                            <div class="btn-group">
                                <a href="/produto/<?= $produto->getId() ?>" class="btn btn-sm btn-primary">
                                    Ver
                                </a>
                                <a href="/produto/<?= $produto->getId() ?>/editar" class="btn btn-sm btn-warning">
                                    Editar
                                </a>
                                <a href="/produto/<?= $produto->getId() ?>/excluir" class="btn btn-sm btn-danger">
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