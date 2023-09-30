<h1>Danh sách các lớp</h1>
<a href="?action=create&controller=lop">Thêm</a>
<table border="1" width="100%">
    <tr>
        <th>
            Mã
        </th>
        <th>
            Lớp
        </th>
    </tr>
    <?php
    foreach ($arr as $each) {
    ?>
        <tr>
            <td> <?php echo $each->show_ma() ?> </td>
            <td> <?php echo $each->get_lop() ?> </td>
            <td><a href="?action=edit&controller=lop&ma=<?php echo $each->get_ma() ?>">Sửa</a></td>
            <td><a href="?action=delete&controller=lop&ma=<?php echo $each->get_ma() ?>">Xóa</a></td>
        </tr>
    <?php
    }
    ?>


</table>