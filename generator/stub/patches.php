<?php

declare(strict_types=1);


return [
    'header_remove' => [
        'signatureArguments' => '?string $name = null',
        'arguments' => '$name',
    ],
    'headers_sent' => [
        'signatureArguments' => 'string &$filename = null, int &$line = null',
        'arguments' => '$filename, $line',
    ],
];