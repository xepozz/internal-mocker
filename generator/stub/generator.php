<?php

declare(strict_types=1);

$folder = './stubs';
$destination = dirname(__DIR__, 2) . '/src/stubs.php';

$phpFiles = new RegexIterator(
    new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($folder)
    ),
    '/.*\.php$/',
    RegexIterator::GET_MATCH
);

$removeAttributesList = implode('|', [
    'LanguageLevelTypeAware',
    'LanguageAware',
    'ElementAvailable',
    'PhpStormStubsElementAvailable',
    'PhpVersionAware',
    'TypeContract',
    'ExpectedValues',
    '\\\\SensitiveParameter',
]);

$stubs = [];
foreach ($phpFiles as $file) {
    $path = $file[0];
    $contents = file_get_contents($path);
    if (!preg_match_all('/^function (\w+)\(.*\)/m', $contents, $matches, PREG_SET_ORDER)) {
        continue;
    }

    foreach ($matches as $match) {
        $functionLine = preg_replace('/#\[(?:' . $removeAttributesList . ')(?:\(.+\)|)] /', '', $match[0]);
        //$functionLine = 'function headers_sent(string &$filename, int &$line): bool';
        preg_match_all('/(\$\w+)/', $functionLine, $arguments,);
        preg_match('/\((.+)\)/', $functionLine, $signatureArguments);

        $stubs[$match[1]] = [
            'signatureArguments' => $signatureArguments[1] ?? '',
            'arguments' => implode(', ', $arguments[0] ?? []),
        ];
    }
}


file_put_contents(
    $destination,
    '<?php' . PHP_EOL . PHP_EOL . 'return ' . var_export($stubs, true) . ';'
);
