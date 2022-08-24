<?php
namespace Sphpring\Core\Controller;
use \Attribute;

#[Attribute]
//#[Getter]
class RestController {
    private string $basePath;

    public function __construct($basePath) {
        $this->basePath = $basePath;
    }
}
