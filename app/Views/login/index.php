<?php include dirname(__DIR__)."/layouts/header-login.php"; ?>

<div class="d-flex justify-content-center mt-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Login
            </h5>
        </div>
        <div class="card-body">
        <form action="/login" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <button type="submit" class="btn btn-block btn-primary">
                Entrar
            </button>
        </form>
        </div>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>