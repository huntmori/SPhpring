<?php  
require "vendor/autoload.php";

use React\Http\HttpServer as HttpServer;
use React\Socket\SocketServer as SocketServer;
use Psr\Http\Message\ServerRequestInterface as Request;
use React\Http\Message\Response as Response;
use Sphpring\Core\AppBuilder;
use Sphpring\App\Index\Controller;

$http = new HttpServer(function (Request $request) {
    $testAppBuilder = new AppBuilder();
    $testController = new Controller\IndexController();
    $controllers = [];

    try {
        $reflection = new \ReflectionClass(Controller\IndexController::class);
        $attributes = $reflection->getAttributes();
        print_r(array_map(fn($attribute) => $attribute->getName(), $attributes));
    } catch(ReflectionException | Exception $e) {
        echo $e->getTraceAsString();
    }

    return Response::plainText(
        "Heelo World!\n"
    );
});

$socket = new SocketServer('127.0.0.1:8080');
$http->listen($socket);

echo "server running at http://127.0.0.1:8080".PHP_EOL;
