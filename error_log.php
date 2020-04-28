<?php
// Envia uma notificação para o log do servidor
// se não pudermos conectar ao banco de dados.
if (!Ora_Logon($username, $password)) {
    error_log("Oracle database not available!", 0);
}

// Avisa o administrados se nós ficarmos sem FOO
if (!($foo = allocate_new_foo())) {
    error_log("Big trouble, we're all out of FOOs!", 1,
               "operator@example.com");
}

// outra forma de usar calling error_log():
error_log("You messed up!", 3, "/var/tmp/my-errors.log");

?>