<?php

date_default_timezone_set('Asia/Yangon');
$ary = getdate();
echo "<pre>" . print_r($ary, true) . "</pre>";

echo $ary['minutes'] . '<hr>';
echo time();
