<?php

$senha = "123456";
$senha_db = '$2y$15$7XXqY/U8fdxcAGMlpbramOneOY9LtvIfZ1fecvz/Kblj2kPxjqt7K';

// array de opcoes
$options = [
    // cost, custo, gera senha menos "vuneravel", mais caracteres on hash
    'cost' => 10
];
// utilizando algoritimo de criptograficaçao - default, sempre gerea uma nova criptograficaçao, hash

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

echo $senhaSegura."<br>";

//

// verificando a senha com o hash
if(password_verify($senha, $senha_db)):

    echo "Senha valida";
else:
    echo "Senha invalida";
endif;
?>