<?php

//phpinfo();

//$pdo = new PDO('mysql:host=mysql;dbname=mysql', 'root', '123456');
$pdo = new PDO('mysql:host=host.docker.internal;dbname=laravel', 'php', 'php');
var_dump($pdo);