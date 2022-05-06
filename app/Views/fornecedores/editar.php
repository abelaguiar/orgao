<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Atualizando Fornecedor
            <p class="float-right">
                <a href="/fornecedores" class="btn btn-sm btn-primary">Voltar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
        <form action="/fornecedor/<?= $data['fornecedor']->getId() ?>/atualizar" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= $data['fornecedor']->getNome() ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>