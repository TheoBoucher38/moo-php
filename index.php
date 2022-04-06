<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Meuh Code School');
$bessie->setTongue('U');

$output = $bessie->say();
echo $output;
