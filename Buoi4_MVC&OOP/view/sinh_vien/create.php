
<form action="?action=store&controller=sinh_vien" method="post">
    Tên sinh viên
    <input type="text" name="hoTen">
    <br>
    Lớp
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
    <button>Thêm</button>
</form>