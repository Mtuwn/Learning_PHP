
<form action="?action=update&controller=lop" method="post">
    <input type="hidden" name="maLop" value="<?php echo $each->get_ma()?>">
    Tên lớp
    <input type="text" name="Lop" value="<?php echo $each->get_lop()?>"> <br>
    <button>Sửa</button>
</form>