<form action="?action=store&controller=sinh_vien" method="post">
    Tên sinh viên
    <input type="text" name="ten_sinh_vien">
    <br>
    Lớp
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
    <button>Thêm</button>
</form>