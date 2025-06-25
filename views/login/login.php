<?php require_once('../components/header.php');?>
<div id="login">
    <form action="" method="post">
        <div>
            <label for="login">Login</label>
            <input type="text" name="login">
        </div>
        <div>
            <label for="password">senha</label>
            <input type="password" name="senha">
        </div>
        <div>
        <input type="submit">
        <a href="/cadastrar.php">cadastrar</a>
        <a href="/recuperarsenha.php">Esqueci minha senha</a>      
        </div>
    </form>
</div>
<?php require_once('../components/footer.php');?>