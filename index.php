<?php
require_once "vendor/autoload.php";

$client = new \Github\Client();
$repositories = $client->api('user')->repositories();
echo "<pre>";
var_dump($repositories);
exit;