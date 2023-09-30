<h1>
    Danh sách sinh viên
</h1>

<a href="?action=create&controller=sinh_vien">Thêm sinh viên</a>

<table width="100%" border="1">
    <tr>
        <th>Mã</th>
        <th>lớp</th>
        <th>Tên sinh viên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php
    foreach ($result as $each) {
    ?>
        <tr>
            <td><?php echo $each['ma'] ?></td>
            <td><?php echo $each['Lop'] ?></td>
            <td><?php echo $each['hoTen'] ?></td>
            <td><a href="?action=edit&controller=sinh_vien&ma=<?php echo $each['ma']?>">sửa</a></td>
            <td><a href="?action=delete&controller=sinh_vien&ma=<?php echo $each['ma'] ?>">xóa</a></td>
        </tr>
    <?php
    }
    ?>
</table>