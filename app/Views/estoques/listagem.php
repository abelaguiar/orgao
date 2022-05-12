<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Estoques totais
            <p class="float-right">
                <a href="/estoque/cadastrar" class="btn btn-sm btn-success">Cadastrar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Produto</td>
                    <td>Quantidade</td>
                    <td>Fornecedor</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['estoques'] as $estoque) { ?>
                    <tr>
                        <td><?= $estoque->getId() ?></td>
                        <td><?= $estoque->getProduto() ?></td>
                        <td><?= $estoque->getQuantidade() ?></td>
                        <td><?= $estoque->getFornecedor()->getNome() ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="/estoque/<?= $estoque->getId() ?>" class="btn btn-sm btn-primary">
                                    Ver
                                </a>
                                <a href="/estoque/<?= $estoque->getId() ?>/editar" class="btn btn-sm btn-warning">
                                    Editar
                                </a>
                                <a href="/estoque/<?= $estoque->getId() ?>/excluir" class="btn btn-sm btn-danger">
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