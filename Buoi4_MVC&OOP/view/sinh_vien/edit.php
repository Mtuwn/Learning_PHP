
<form action="?action=update&controller=sinh_vien" method="post">
    <input type="hidden" name="ma" value="<?php echo $each->get_ma() ?>">
    Tên sinh viên
    <input type="text" name="hoTen" value="<?php echo $each->get_hoTen() ?>"> <br>
    <select name="maLop">
        <?php
        foreach ($arr as $lops) {
        ?>
            <option value="<?php echo $lops->get_ma() ?>">
                <?php echo $lops->get_lop() ?>
            </option>
        <?php
        } 
        ?>
    </select> <br>
    <button>Sửa</button>
</form>
