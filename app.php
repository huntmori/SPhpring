<?php  
require __DIR__."/vendor/autoload.php";

use React\Http\HttpServer as HttpServer;
use React\Socket\SocketServer as SocketServer;
use Psr\Http\Message\ServerRequestInterface as Request;
use React\Http\Message\Response as Response;

$http = new HttpServer(function (Request $request) {
    return Response::plainText(
        "Heelo World!\n"
    );
});

$socket = new SocketServer('127.0.0.1:8080');
$http->listen($socket);

echo "server running at http://127.0.0.1:8080".PHP_EOL;