<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Criando Estoque
            <p class="float-right">
                <a href="/estoques" class="btn btn-sm btn-primary">Voltar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
    <form action="/estoque/salvar" method="POST">
        <div class="form-group">
            <label>Produtos</label>
            <select name="produto_id" class="form-control">
                <option value="">Selecione</option>
                <?php foreach ($data['produtos'] as $produto ) { ?>
                    <option value="<?= $produto->getId() ?>"><?= $produto->getNome() ?></option>
                <?php } ?>
            </select>      
            </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="int" name="quantidade" class="form-control">
        </div>
        <div class="form-group">
            <label>Fornecedores</label>
            <select name="fornecedor_id" class="form-control">
                <option value="">Selecione</option>
                <?php foreach ($data['fornecedores'] as $fornecedor) { ?>
                    <option value="<?= $fornecedor->getId() ?>"><?= $fornecedor->getNome() ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>