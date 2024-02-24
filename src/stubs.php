<?php

return [
    'headers_sent' => [
        'signature' => 'headers_sent(&$filename, &$line): bool',
        'signatureArguments' => '&$filename, &$line',
        'arguments' => '$filename, $line',
    ],
    'time' => [
        'signature' => 'time(): int',
        'signatureArguments' => '',
        'arguments' => '',
    ],
];