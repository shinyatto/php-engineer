<?php

function xrange($min, $max, $step) {
  for ($i = $min ; $i <= $max ; $i += $step) {
    yield $i;
  }
}

$xrange = xrange(1, 10, 3);
foreach ($xrange as $v) {
  echo $v.PHP_EOL;
}
