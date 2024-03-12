<?php


echo 'treinando yield <hr>';



function yieldCall()
{
    for ($i = 0; $i < 10; $i++) {
        yield $i;
    }
}


$generator = yieldCall();

var_dump($generator);
echo 'treinando yield <hr>';

foreach ($generator as $value) {
    var_dump($value);
}

echo 'treinando yield 2 <hr>';

$csv = 'nome;raziel';

function parserYield($input)
{
    foreach (explode(';', $input) as $key => $value) {
        yield uniqid() => $value;
    }
}

foreach (parserYield($csv) as $key => $value) {
    echo ($key);
    echo '<hr>';

    echo $value;
}

echo '<hr>';

function &genYield()
{
    $value = 3;

    while ($value > 0) {
        yield $value;
    }
}

foreach (genYield() as &$key) {
    echo (--$key);
}
