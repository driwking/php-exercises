<!-- materilaze -->

<?php

include_once 'C:\xampp\htdocs\php\phpcurso.com\CRUD\includes\headers.php';

include_once 'C:\xampp\htdocs\php\phpcurso.com\CRUD\includes\footer.php';


?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light">Novo clientes</h3>
        <form action="create.php" method="POST">
        <div class="input-field col s12">
            <input type="text" name="nome" id="nome">
            <table for="nome">Nome</table>
        </div>
        <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenome">
            <table for="sobrenome">Sobrenome</table>
        </div>
        <div class="input-field col s12">
            <input type="email" name="email" id="email">
            <table for="email">Email</table>
        </div>
        <div class="input-field col s12">
            <input type="text" name="idade" id="idade">
            <table for="idade">Idade</table>
        </div>
        <button type="submit" class="btn" name="cadastrar">Cadastrar</button>
        <button href="index.php" type="submit" class="btn green" name="listar-clientes"> Lista de clientes</button>
        </form>
    </div>
</div>
<?php


?>