<h1>Danh sách sinh viên</h1>
<a href="?action=create&controller=sinh_vien">Thêm</a>
<table border="1" width="100%">
    <tr>
        <th>
            Mã
        </th>
        <th>
            Lớp
        </th>
        <th>
            Họ Tên
        </th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php
    foreach ($arr as $each) {
    ?>
        <tr>
            <td> <?php echo $each->show_ma() ?> </td>
            <td> <?php echo $each->get_Lop() ?> </td>
            <td> <?php echo $each->get_hoTen() ?> </td>
            <td><a href="?action=edit&controller=sinh_vien&ma=<?php echo $each->get_ma() ?>">Sửa</a></td>
            <td><a href="?action=delete&controller=sinh_vien&ma=<?php echo $each->get_ma() ?>">Xóa</a></td>
        </tr>
    <?php
    }
    ?>


</table>