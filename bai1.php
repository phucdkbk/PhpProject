<table>
    <?php
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    for ($i = 1; $i <= 18; $i++) {
        ?>
        <tr>
            <?php
            for ($j = 1; $j <= 18; $j++) {
                ?>
                <td>
                    &nbsp;
                    <?php
                    $value = $i * $j;
                    echo $value;
                    ?>
                </td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>

