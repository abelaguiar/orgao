<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Criando Produto
            <p class="float-right">
                <a href="/produtos" class="btn btn-sm btn-primary">Voltar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
    <form action="/produto/salvar" method="POST">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input type="float" name="valor" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>