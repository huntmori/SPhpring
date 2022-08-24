<?php
namespace Sphpring\Core;
use Attribute;
use React\Http\HttpServer;

#[Attribute(Attribute::TARGET_CLASS)]
class AppBuilder {
    private string $appName;
    private int $portNumber;

    private HttpServer $server;
    public function __construct()
    {
    }

    public function build() :void {

    }
}