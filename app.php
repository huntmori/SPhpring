<?php  
require "vendor/autoload.php";

use React\Http\HttpServer as HttpServer;
use React\Socket\SocketServer as SocketServer;
use Psr\Http\Message\ServerRequestInterface as Request;
use React\Http\Message\Response as Response;
use Sphpring\Core\AppBuilder;
use Sphpring\App\Index\Controller;

$http = new HttpServer(function (Request $request) {
    new AppBuilder();
    new Controller\IndexController();
    foreach(get_declared_classes() as $name){
       var_dump($name);
    }
    return Response::plainText(
        "Heelo World!\n"
    );
});

$socket = new SocketServer('127.0.0.1:8080');
$http->listen($socket);

echo "server running at http://127.0.0.1:8080".PHP_EOL;
