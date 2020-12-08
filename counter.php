<html>
<head>
    <title>Last visited</title>  
    <style>
         b{
             color: #FF6961;
            }
    </style>
</head>
<body style="background-color:E2EEC2";>
    <center><h2> Last visited time on the web page...</h2></center>
    <br>
<?php
//date_default_timezone_set('Asia/Calcutta'); - You can choose any timezone
//Calculate 60 days in the future

 

//เก็บไว้2เดือนพอ
//seconds * minutes * hours * days + current time
$inTwoMonths = 60 * 60 * 24 * 60 + time();

//setcookie count
if(isset($_COOKIE['count'])){
    $count=$_COOKIE['count']+1;
}else{
    $count=1; //ครั้งแรก เมื่อเป็นnullอยู่
}
setcookie('count',$count,$inTwoMonths,"/");
echo "You have visited this site <b>".$count."</b> time(s) <br>";
//---------------------------------------------------------------------

//setcookie('lastVisit', date("G:i - m/d/y/s"), $inTwoMonths);
// setcookie('lastVisit', date("G:i:s - I/d/m/Y  "), $inTwoMonths);
// if(isset($_COOKIE['lastVisit'])){
// $visit = $_COOKIE['lastVisit'];
// echo "Your last visit was ... ". $visit;
// }
// else
// echo "You've got some stale cookies!";

//เด่วต้องทำให้มันลบกัน
setcookie('lastVisit_second', date("s"), $inTwoMonths);
setcookie('lastVisit_minute', date("m"), $inTwoMonths);
setcookie('lastVisit_hour', date("G"), $inTwoMonths);
setcookie('lastVisit_day', date("j"), $inTwoMonths);
echo "The previous visit is";
if(isset($_COOKIE['lastVisit_day'])){
    $visit = $_COOKIE['lastVisit_day'];
   echo "<b> ". $visit."</b> day(s)";
    }
if(isset($_COOKIE['lastVisit_hour'])){
    $visit = $_COOKIE['lastVisit_hour'];
   echo "<b> ". $visit."</b> hour(s)";
    }
if(isset($_COOKIE['lastVisit_minute'])){
    $visit = $_COOKIE['lastVisit_minute'];
   echo "<b> ". $visit."</b> minute(s)";
    }
if(isset($_COOKIE['lastVisit_second'])){
     $visit = $_COOKIE['lastVisit_second'];
    echo "<b> ". $visit."</b> second(s)";
     }
     echo " ago. ";
?>
<hr>


</body>
</html>
<!--
    format
d - Day of the month; with leading zeros
j - Day of the month; without leading zeros
D - Day of the month (Mon - Sun)
l - Day of the month (Monday - Sunday)
S - English suffix for day of the month (st, nd, rd, th)
F - Monthname (January - December)
M - Monthname (Jan-Dec)
m - Month (01-12)
n - Month (1-12)
Y - Year (e.g 2013)
y - Year (e.g 13)
a and A - am or pm
g - 12 hour format without leading zeros
G - 24 hour format without leading zeros
h - 12 hour format with leading zeros
H - 24 hour format with leading zeros
i - Minutes with leading zeros
s - Seconds with leading zeros
u - Microseconds (up to six digits)
e, O, P and T - Timezone identifier
U - Seconds since Unix Epoch
(space)
# - One of the following separation symbol: ;,:,/,.,,,-,(,)
? - A random byte
* - Rondom bytes until next separator/digit
! - Resets all fields to Unix Epoch
| - Resets all fields to Unix Epoch if they have not been parsed yet
+ - If present, trailing data in the string will cause a warning, not an error -->
