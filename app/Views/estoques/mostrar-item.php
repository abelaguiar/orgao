<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Estoque
            <p class="float-right">
                <a href="/estoques" class="btn btn-sm btn-primary">Voltar</a>
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
                    <td><?= $data['estoque']->getId() ?></td>
                </tr>

                <tr>
                    <td><b>Produto</b></td>
                </tr>

                <tr>
                    <td><?= $data['estoque']->getNomeProduto() ?></td>
                </tr>

                <tr>
                    <td><b>Quantidade</b></td>
                </tr>
              
                <tr>
                    <td><?= $data['estoque']->getQuantidade() ?></td>
                </tr>

                <tr>
                    <td><b>Fornecedor</b></td>
                </tr>

                <tr>
                    <td><?= $data['estoque']->getFornecedor()->getNome() ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>