<?php
namespace Galihlasahido\Codeigniter\Attributeroutes\Attributes;

#[\Attribute]
class PutRoute {
    public function __construct(public string $path, public ?array $filter = []) {}
}