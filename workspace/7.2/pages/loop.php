<div class="container-loop">
    <?php
    echo "<table>";

    for ($row = 1; $row <= 4; $row++) {
        echo "<tr>";
        if ($row % 2 != 0) {
            for ($col = 1; $col <= 9; $col++) {
                echo "<td>$col</td>";
            }
        } else {
            for ($col = 9; $col >= 1; $col--) {
                echo "<td>$col</td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
    </table>

</div>