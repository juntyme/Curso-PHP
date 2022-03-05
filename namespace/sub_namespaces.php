<?php namespace App; ?>
<div class="titulo">Sub-Namespaces</div>
<?php

echo __NAMESPACE__ . '<br>';
const constante = 123;

// Sub Namespace
namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const constante = 234;

// Sub Namespace
namespace APP\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const constante = 345;

echo constante . '<br>';
echo constant('\\'.__NAMESPACE__ . '\constante').'<br>';

echo \APP\constante . '<br>';
echo \APP\Principal\constante . '<br>';
echo \APP\Principal\Especifico\constante . '<br>';