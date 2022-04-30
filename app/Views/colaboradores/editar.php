<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Atualizando Colaborador
            <p class="float-right">
                <a href="/colaboradores" class="btn btn-sm btn-primary">Voltar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
        <form action="/colaborador/<?= $data['colaborador']->getId() ?>/atualizar" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= $data['colaborador']->getNome() ?>">
            </div>
            <div class="form-group">
                <label>Empresas</label>
                <select name="empresa_id" class="form-control">
                    <option value="">Selecione</option>
                    <?php foreach ($data['empresas'] as $empresa) { ?>
                        <option value="<?= $empresa->getId() ?>" 
                            <?= ($data['colaborador']->getEmpresa()->getId() == $empresa->getId()) ? "selected" : ""?>
                        >
                            <?= $empresa->getNome() ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>