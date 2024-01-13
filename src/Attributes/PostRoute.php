<?php
namespace Galihlasahido\Codeigniter\Attributeroutes\Attributes;;

#[\Attribute]
class PostRoute {
    public function __construct(public string $path, public ?array $filter = []) {}
}