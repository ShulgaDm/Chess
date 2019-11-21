<?php

include 'class/Storage.php';
include 'class/FileStorage.php';
// include 'class/MysqlStorage.php';
include 'class/SessionStorage.php';
include 'class/Board.php';

$storage = new SessionStorage('map');
// $storage = new FileStorage('figures.txt');
// $storage = new MysqlStorage('mysql:host=localhost;dbname=CHESS;charset=utf8', 'root', '');
$board = new Board($storage);

if (isset($_GET['newFigures'])) {
    echo $board->newFigures();
}
if (isset($_GET['getFigures']))
    echo $board->getFigures();

if (isset($_GET['moveFigure']))
    echo $board->moveFigure($_GET['frCoord'], $_GET['toCoord']);


// if (isset($_GET['moveFigure'])) {
//     $frCoord = $_GET['frCoord'];
//     $toCoord = $_GET['toCoord'];
//     $figures =$storage->load();
//     $figure = $figures[$frCoord];
//     $figures[$frCoord]='1';
//     $figures[$toCoord]=$figure;
//     $storage->save($figure);
//     echo $storage->load();
// }
