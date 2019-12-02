<?php

declare(strict_types=1);

namespace PhpAddons\Ds;

require_once __DIR__ . '/../vendor/autoload.php';

$set = new \Ds\Set([1,2,3]);
$intSet = new IntSet($set);
$intSet2 = new IntSet([2,3]);
$new = $intSet2->diff($intSet);
var_dump($new);
