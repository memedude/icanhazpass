<?php declare(strict_types=1);
$debug = false; ($debug) ? error_reporting(E_ALL) : error_reporting(0);

/** will respond with pong - updated: 2021.01.31 */
header('Cache-Control: private, no-store');
header('Content-Type: application/json; charset=utf-8');

$data = ['message' => 'pong'];
$data = json_encode($data, JSON_PRETTY_PRINT);
echo $data.PHP_EOL;