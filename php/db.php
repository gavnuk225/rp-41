<?php
$dbc = new mysqli('localhost', "root", "root","slv");
/* проверка соединения */
if ($dbc->connect_errno) {
    printf("Не удалось подключиться: %s\n", $dbc->connect_error);
    exit();
}
?>