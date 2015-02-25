<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <body>
        <form action="bai4.php" method="post">
            Interger array (separated by space): <input type="text" name="arrNumber"><br>
            <input type="submit">
        </form>
        <?php
        $strNumbers = $_POST["arrNumber"];
        $arrNumbers = explode(" ", $strNumbers);
        $sum = 0;
        for ($i = 0; $i < count($arrNumbers); $i++) {
            $sum += $arrNumbers[$i];
        }
        $standardSum = 0;
        for ($i = 1; $i <= 108; $i++) {
            $standardSum += $i;
        }
        ?>
        The missing number is <br />
        <?php echo $standardSum - $sum; ?><br>
    </body>
</html>

