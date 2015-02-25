<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <body>
        <form action="bai2.php" method="post">
            Interger array (separated by space): <input type="text" name="arrNumber"><br>
            <input type="submit">
        </form>

        <?php
        $strNumbers = $_POST["arrNumber"];
        $arrNumbers = explode(" ", $strNumbers);
        $highest = -10000;
        $secondHighest = -10000;
        for ($i = 0; $i < count($arrNumbers); $i++) {
            if ($arrNumbers[$i] > $highest) {
                $secondHighest = $highest;
                $highest = $arrNumbers[$i];
            } else if ($arrNumbers[$i] > $secondHighest) {
                $secondHighest = $arrNumbers[$i];
            }
        }
        ?>
        The second highest number of arrays <br />
        <?php echo $strNumbers; ?><br>
        is <?php echo $secondHighest; ?><br>
    </body>
</html>

