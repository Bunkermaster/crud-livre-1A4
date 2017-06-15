<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 15/06/2017
 * Time: 11:57
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=crud-livre-1A4','root','root');
    $pdo->exec('SET NAMES UTF8');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
