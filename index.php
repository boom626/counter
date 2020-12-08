<html>
<head>
    <title>Last visited</title>  
    <style>
        h2{
            text-align: center;
            font-size: 36px;
            padding: 30px;
            background-color:#F2CBBB;
        }
         b{
             color: #FF6961;
            }
    </style>
</head>
<body   style="background-color:E2EEC2";>
    <center><h2> Last visited time on the web page...</h2></center>
    <br>
    
    <?php
    
    if (!isset($_COOKIE['visited'])) {
        $count = 1;
        setcookie('timee', time(), time() + 60, "/");
    } else {
        $count = $_COOKIE['visited'] + 1;
        $sumtime = time() - $_COOKIE['timee'];
        setcookie('timee', time(), time() + 60, "/");
    }

    setcookie('visited', $count, time() + 3600, "/");
    echo "You have visited this site <b>" . $count . "</b> time(s)<br>";
    // echo date("H--i--s", time()) . "<br>";
    echo "The previous visit is <b>";
    echo date("i" , $sumtime) . "</b> minute(s) <b>";
    echo date("s", $sumtime) . "</b> second(s) ago<br><br> <hr> <br>";
    // http://pilot.cp.su.ac.th/usr/u07600626/counter
    echo "<form method='get'>
            <input type='submit' name='reset' value='clear'>
          </form></a>";
    if ($_GET['reset'] == 'clear') {
        setcookie('visited', $count, time() - 3600, "/");
        echo "<script>window.location.assign('http://pilot.cp.su.ac.th/usr/u07600626/counter')</script>";;
    }
    ?>

</body></html>