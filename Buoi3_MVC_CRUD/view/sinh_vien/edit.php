
<form action="?action=update&controller=sinh_vien" method="post">
    <input type="hidden" name="ma" value="<?php echo $each['ma'] ?>">
    Tên sinh viên
    <input type="text" name="ho_ten" > <br>
    <select name="ma_lop">
        <?php
        foreach ($lop as $lops) {
        ?>
            <option value="<?php echo $lops['maLop'] ?>">
                <?php echo $lops['Lop'] ?>
            </option>
        <?php
        
        } 
        ?>
    </select> <br>
    <button>Sửa</button>
</form>
