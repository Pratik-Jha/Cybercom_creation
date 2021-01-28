<?php
//in this we fetch the current date and time.
$time = time();
$full_date = date('D M Y || H:i:s', $time);
$short_date = date('d/m/y|| H:i:s', $time);

echo 'The current date/time in full format:  ' . $full_date;
echo '<br><br>The current date/time in short format(DD/MM/YY):  ' . $short_date;

$date = date('d M Y || H:i:s', $time);
$date_now = date('d M Y @ H:i:s', $time - 60);
$date_now_week = date('d M Y @ H:i:s', strtotime('+1 week'));
$date_now_week = date('d M Y @ H:i:s', strtotime('+1 week 2 hours 30 seconds'));
$date_now = date('d M Y @ H:i:s', $time - (7 * 24 * 30 * 30));

echo '<br><br>Today\'s date and time : '.$date;
echo '<br>Date and time after one week : '.$date_now_week;
?>