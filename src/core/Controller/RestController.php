<?php
namespace Sphpring\Core\Controller;
use \Attribute;

#[Controller]
#[Attribute(Attribute::TARGET_CLASS)]
class RestController {
    private string $basePath;

    public function __construct($basePath) {
        $this->basePath = $basePath;
    }
}
