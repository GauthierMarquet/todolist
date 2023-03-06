<?php

function renderView(string $viewName, string $layout = 'main', array $data = []) {
    ob_start();
    extract($data);
    require __DIR__.'./views/'. $viewName .'.php';
    $contenu = ob_get_clean();
    require __DIR__.'./views/layout/'.$layout.'.php';
}

function getConfig(string $key) {
    $config = require 'config.php';
    if(is_array($config) && array_key_exists($key, $config)) {
        return $config[$key];
    }
    return null;
}

function getDb() {
    $dbName = getConfig('db_name');
    $dbHost = getConfig('db_host');
    $dsn = 'mysql:dbname='.$dbName.';host='.$dbHost;
    $user = getConfig('db_user');
    $password = getConfig('db_password');

    return new PDO($dsn, $user, $password);
}