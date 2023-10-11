<?php

// function WebSockets($address, $port)
// {
//     $server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//     socket_set_option($server, SOL_SOCKET, SO_REUSEADDR, 1);
//     socket_bind($server, $address, $port);
//     socket_listen($server);
//     return $server;
// }

try {
    $db = new PDO('mysql:host=localhost;dbname=nbradio', 'root', '123456');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("SET NAMES 'utf8mb4'");
    $db->exec("SET CHARACTER SET 'utf8mb4'");
    $result = $db->query("select * from nb_news");

    print_r($result->fetchAll());
} catch (Exception $e) {
    print_r($e->getMessage());
}