<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Criando Colaborador
            <p class="float-right">
                <a href="/colaboradores" class="btn btn-sm btn-primary">Voltar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
    <form action="/colaborador/salvar" method="POST">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>Empresas</label>
            <select name="empresa_id" class="form-control">
                <option value="">Selecione</option>
                <?php foreach ($data['empresas'] as $empresa) { ?>
                    <option value="<?= $empresa->getId() ?>"><?= $empresa->getNome() ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>