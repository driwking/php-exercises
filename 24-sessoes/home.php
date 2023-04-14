<?php
session_start();

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id(); // exibindo valores de outra pagina pelo session_start()



?>