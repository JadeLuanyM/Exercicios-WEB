<?php
$login_user = $_POST['login'];
$senha_user = $_POST['senha'];

if ($login_user == "Jade" && $senha_user == "12345"){
    echo "<h3>Acesso permitido.</h3>";
} else {
    echo "<h3>Acesso não permitido.</h3>";
}


?>