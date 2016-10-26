<?php

require_once __DIR__ . '/vendor/autoload.php';

use package2 as pack;

new package1_class1();
echo '<br/>';
new package1_sub_class2();

echo '<br/><br/>';

new pack\package2_class1();
echo '<br/>';
new pack\sub\package2_sub_class2();