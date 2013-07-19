<?php

$p = new \Phar('/Users/james/DeitAuthentication.phar');
$p->startBuffering();
$p->buildFromDirectory(__DIR__, '/\.(php|phtml)$/');
$p->compressFiles(Phar::GZ);
$p->setSignatureAlgorithm(Phar::SHA1);
$p->stopBuffering();

echo 'done';

