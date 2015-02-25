<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <body>
        <form action="bai3.php" method="post">
            Suppose the watch have 12 numbers <br/>
            Time (e.g: 10:30): <input type="text" name="time"><br>
            <input type="submit">
        </form>

        <?php
        $time = $_POST["time"];
        $arrTimes = explode(":", $time);
        $hour = $arrTimes[0];
        if ($hour > 12) {
            $hour = $hour - 12;
        }
        $minute = $arrTimes[1];
        $minuteAngle = $minute / 60 * 360;
        $hourAngle = $hour / 12 * 360 + $minute / 60 * (360 / 12);
        $angle = $hourAngle - $minuteAngle;
        if ($angle < 0) {
            $angle = -$angle;
        }
        if ($angle >= 180) {
            $angle = $angle - 180;
        }
        ?>
        The angle between hour stick and minute stick is<br />
        <?php echo $angle; ?><br>
    </body>
</html>

