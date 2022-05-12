<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Atualizando Estoque
            <p class="float-right">
                <a href="/estoques" class="btn btn-sm btn-primary">Voltar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
        <form action="/estoque/<?= $data['estoque']->getId() ?>/atualizar" method="POST">
            <div class="form-group">
                <label>Produto</label>
                <input type="text" name="nome_produto" class="form-control" value="<?= $data['estoque']->getProduto() ?>">
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="int" name="quantidade" class="form-control" value="<?= $data['estoque']->getQuantidade() ?>">
            </div>
            <div class="form-group">
                <label>Fornecedores</label>
                <select name="fornecedor_id" class="form-control">
                    <option value="">Selecione</option>
                    <?php foreach ($data['fornecedores'] as $fornecedor) { ?>
                        <option value="<?= $fornecedor->getId() ?>" 
                            <?= ($data['estoque']->getFornecedor()->getId() == $fornecedor->getId()) ? "selected" : ""?>
                        >
                            <?= $fornecedor->getNome() ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>