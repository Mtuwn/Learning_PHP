<div class="container-drawtable">
    <div id="header-drawtable">Trang Draw Table</div>
    <form id="formVe" action="" method="POST">
        <p>Form ve bang</p>
        <div>
            <label for="number_row">So dong: </label>
            <input type="text" name="number_row">
        </div>
        <div>
            <label for="number_culumn">So cot: </label>
            <input type="text" name="number_culumn">
        </div>
        <div>
            <button type="reset">Nhap lai</button>
            <button type="submit">Ve</button>
            <span>(Click nut ve thi moi ve bang va bang moi duoc hien thi o duoi)</span>
        </div>
    </form>
    <div class="table">
        <?php
        if (!empty($_POST['number_row']) && !empty($_POST['number_culumn'])) {
            echo "<table style='width:100%';>";
            for ($i = 1; $i <= (int)$_POST['number_row']; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= (int)$_POST['number_culumn']; $j++) {
                    if ($j <= $i)
                        echo "<td>", $j, "</td>";
                    else echo "<td>", " ", "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }
        ?>
    </div>


</div>