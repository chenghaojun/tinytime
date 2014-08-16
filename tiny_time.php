<?php
/**
 * 将数字转成好理解的时间字符，如:123456 转换成：1天10时17分36秒
 * @param $tiny_time_str 存储计算之后时间的字符串
 * @param $sec 想转换友好显示字符串的数字。单位：秒
 * @author <a href="http://weibo.com/chenghaojun">@肥客吃饭</a>
 */
function tiny_time(&$tiny_time_str, $sec) {
    if ($sec >= 86400) {
        $mol = $sec % 86400;
        $tiny_time_str .= ($sec - $mol) / 86400 . '天';
        if ($mol == 0) {
            return;
        }
        tiny_time($tiny_time_str, $mol);
    }
    if ($sec >= 3600 && $sec < 86400) {
        $mol = $sec % 3600;
        $tiny_time_str .= floor($sec / 3600) . '时';
        if ($mol == 0) {
            return;
        }
        tiny_time($tiny_time_str, $mol);
    }
    if ($sec >= 60 && $sec < 3600) {
        $mol = $sec % 60;
        $tiny_time_str .= floor($sec / 60) . '分';
        if ($mol == 0) {
            return;
        }
        tiny_time($tiny_time_str, $mol);
    }
    if ($sec >= 0 && $sec < 60) {
        $tiny_time_str .= floor($sec) . '秒';
        return;
    }
    return;
}
?>