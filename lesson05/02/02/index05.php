<?php

namespace lessson05\php\demo01\example02\index07;

use DirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use FilesystemIterator;

$dir = dirname(dirname(__DIR__));

$iterator = new DirectoryIterator($dir);

foreach ($iterator as $item) {
    echo $item->isDir() ? 'Dir: ' : 'File: ';
    echo $item->getFileName() . PHP_EOL;
}

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)
);


foreach ($iterator as $item) {
    echo $item->isDir() ? 'Dir: ' : 'File: ';
    echo $item->getPath() . DIRECTORY_SEPARATOR . $item->getFileName() . PHP_EOL;
}