<?php
namespace Galihlasahido\Codeigniter\Attributeroutes\Attributes;

#[\Attribute]
class DeleteRoute {
    public function __construct(public string $path, public ?array $filter = []) {}
}