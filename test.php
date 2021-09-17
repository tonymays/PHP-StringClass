<?php
require_once("string.php");
$c = new Str();
$s = 'Hello World. My name is Tony Mays';
echo $c->slice_before($s, 'World'), "\n";
echo $c->slice_after($s, 'Hello'), "\n";
echo $c->slice_between($s, '.', 'is'), "\n";