# PHP-StringClass
A class that makes working with PHP strings simply powerful

Class Method Index
```
* public function slice_before(string $haystack, string $needle) : string
* public function slice_after(string $haystack, string $needle) : string
* public function slice_between(string $haystack, string $start, string $end) : string
```

#### <ins>slice_before</ins>
* Slices haystack before the needle

#### <ins>slice_after</ins>
* Slices haystack after the needle

#### <ins>slice_between</ins>
* Slices haystacks between the start and end needles

#### Sample slice code
* <ins>Code</ins>
```
<?php
require_once("string.php");
$c = new Str();
$s = 'Hello World. My name is Tony Mays';
echo $c->slice_before($s, 'World'), "\n";
echo $c->slice_after($s, 'Hello'), "\n";
echo $c->slice_between($s, '.', 'is'), "\n";
```
* <ins>Output</ins>
```bash
Hello
 World. My name is Tony Mays
 My name 
```