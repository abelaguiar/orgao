<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Criando Usuário
            <p class="float-right">
                <a href="/usuarios" class="btn btn-sm btn-primary">Voltar</a>
            </p>
        </h5>
    </div>
    <div class="card-body">
    <form action="/usuario/salvar" method="POST">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>