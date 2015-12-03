<?php
//1.时区设置
//修改PHP配置文件php.ini date.timezone=Asia/Shanghai Asia/Chong
//在应用程序中添加date_defualt_timezone_set(timezone);

//1.1 获得本地化时间戳
//int mktime(int hour,int minute,int second,int month,int day,int year,int [is_dst]);
//is_dst 夏令时设置为1，不是则设置为0，不确定设置为-1
echo "mktime = ".mktime();
echo "Now time: ".date("Y-m-d  H:i:s",mktime())."<br/>";

//1.2 获取当前时间戳
// int time(void)
$nextweek = time() + 7*24*60*60;
echo "Now: date('Y-m-d')";
echo 'Next week:'.date('Y-m-d',$nextweek);
echo "<br/>";
//1.3 getdate 
//seconds,minutes,hours,year,month,,mday,weekend,yday,wday,mon,0
$arr = getdate();
echo $arr[year].'-'.$arr[mon].'-'.$arr[mday].' ';
echo "$arr[hours]:$arr[minutes]:$arr[seconds]";
echo "<br/>";
echo "Today is the $arr[yday]th of year";

//1.4 date
echo "<br/>";
echo date("Y-m-d H:i:s");
echo "<br/>";
echo date("\T\o\d\a\y \i\s \\t\h\e jS \o\f \y\\e\a\\r");

?>

