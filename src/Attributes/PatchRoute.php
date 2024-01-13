<?php
namespace Galihlasahido\Codeigniter\Attributeroutes\Attributes;

#[\Attribute]
class PatchRoute {
    public function __construct(public string $path, public ?array $filter = []) {}
}