<?php
date_default_timezone_set('Asia/Yangon');
# a/A = am or pm
# d= day
#D = day of the week
#h = 00 yuu tl time mr 12 hour format, H = 24 hour format
#g = 0 ma yu bu ^^
$date = date('d-m-y H:m:s', time());
echo $date;
