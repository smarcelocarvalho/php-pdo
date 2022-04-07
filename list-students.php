<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO ('sqlite:'. $databasePath);

$statement = $pdo->query('SELECT * FROM students;');

//Modo PDO::FETCH_ASSOC retorna nome coluna
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData):
    $studentList = new Student (
        $studentData['id'],
        $studentData['name'],
        new DateTimeImmutable ($studentData['birth_date'])
    );
endforeach;

var_dump($studentList);