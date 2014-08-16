<?

include('./tiny_time.php');

$t = '';

$t1 = 123;
$t2 = 1234;
$t3 = 12345;
$t4 = 123456;
$t5 = 1234567;

tiny_time($t, $t1);
echo "$t1 秒的易理解格式是：$t <br>";
unset($t);

tiny_time($t, $t2);
echo "$t2 秒的易理解格式是：$t <br>";
unset($t);

tiny_time($t, $t3);
echo "$t3 秒的易理解格式是：$t <br>";
unset($t);

tiny_time($t, $t4);
echo "$t4 秒的易理解格式是：$t <br>";
unset($t);

tiny_time($t, $t5);
echo "$t5 秒的易理解格式是：$t <br>";
unset($t);

?>