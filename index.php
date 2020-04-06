<?php
require __DIR__.'/vendor/autoload.php';

$soma = new App\Model\Soma();
$result = $soma->run(10, 10);

echo "Resultado" . PHP_EOL;
echo $result;
