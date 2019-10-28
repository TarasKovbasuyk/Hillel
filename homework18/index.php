<?php
error_reporting(E_ALL);
require_once 'RadioChoice.html';
require_once 'classesFileWork\autoload.php';
if (!empty($_POST['button'])){
if ($_POST['button'] == 'read'){
    if(!is_null($_POST['fileType'])){
        $typeFile = $_POST['fileType'];
        $selectFileTypeForRead = new SelectFileType($typeFile, 'data/data1.' . $typeFile);
        $read = $selectFileTypeForRead->getRead();
        $dataRead = $read->read();
        print_r($dataRead);
    }
}
if ($_POST['button'] == 'write') {
    if (!is_null($_POST['fileType']) && !is_null($_POST['dataName']) && !is_null($_POST['dataDate'])) {
        $typeFile = $_POST['fileType'];
        $array = [];
        array_push($array, $_POST['dataName'], $_POST['dataDate']);
        var_dump($array);
        $selectFileTypeForWrite = new SelectFileType($typeFile, 'data/data1.' . $typeFile);
        $write = $selectFileTypeForWrite->getWrite();
        $dataWrite = $write->write($array);
        print_r($dataWrite);
    }
}
if ($_POST['button'] == 'show'){
    if(!is_null($_POST['fileType'])){
        $typeFile = $_POST['fileType'];
        $selectFileTypeForShow = new SelectFileType($typeFile, 'data/data1.' . $typeFile);
        $selectFileTypeForRead = new SelectFileType($typeFile, 'data/data1.' . $typeFile);
        $read = $selectFileTypeForRead->getRead();
        $dataRead = $read->read();
        $show = $selectFileTypeForShow->getShow();
        $dataShow = $show->show($dataRead);
    }
}
}else {
    echo 'Вы пока ничего не передали';
}