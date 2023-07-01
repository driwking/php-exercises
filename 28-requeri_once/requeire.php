<?php

require 'header.php'; //incluir arquivos; require também, mas interrompe o script diferente do 
//include que exibe um aviso mas roda normalmente

require_once "header.php"; // verifica se já foi incluindo mais de uma vez o mesmo arquivo.
?>




<?php

echo "Hellow World";

?>

<?php

include "footer.php";
include "footer.php";

?>