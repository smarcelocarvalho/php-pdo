<?php

// Utilizar caminho absoluto 
$databasePath = __DIR__ . '/banco.sqlite';

// PDO interface para acessar diversos tipos de banco através de drivers.
// SQLite é um GBD que não precisa de servidor.
$pdo = new PDO ('sqlite:'. $databasePath);

echo 'Conectei';

// exec -> realiza operações estruturais na tabela

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');