<h1>
    Danh sách lớp
</h1>

<a href="?action=create&controller=lop">Thêm lớp</a>

<table width="100%" border="1">
    <tr>
        <th>Mã</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php
    foreach ($result as $each) {
    ?>
        <tr>
            <td><?php echo $each['maLop'] ?></td>
            <td><?php echo $each['Lop'] ?></td>
            <td><a href="?action=edit&controller=lop&ma=<?php echo $each['maLop']?>">sửa</a></td>
            <td><a href="?action=delete&controller=lop&ma=<?php echo $each['maLop'] ?>">xóa</a></td>
        </tr>

    <?php
    }
    ?>
</table>