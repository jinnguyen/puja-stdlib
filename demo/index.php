<?php
include __DIR__ . '/../vendor/autoload.php';
$folder = new \Puja\Stdlib\Folder\Folder('../src');
print_r($folder->getChildFiles());


$fileInfo = new \Puja\Stdlib\File\Info('testfile.php');
echo $fileInfo->getExtension();
echo $fileInfo->getFilename();
echo $fileInfo->getBasename();
echo $fileInfo->getBasenameWithoutExt('-abc');
