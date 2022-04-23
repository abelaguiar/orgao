<ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], '/') ? 'active' : '' ?>" href="/">
            Início
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'empresa') ? 'active' : '' ?>" href="/empresas">
            Empresas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'usuario') ? 'active' : '' ?>" href="/usuarios">
            Usuários
        </a>
    </li>
</ul>
<div class="d-flex text-white">
    <?= $_SESSION['nome'] ?>
    &nbsp; | &nbsp;
    <a class="text-danger" href="/logout"> <b>Sair</b></a>
</div>