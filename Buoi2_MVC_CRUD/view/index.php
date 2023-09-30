
<h1>Danh sách sinh viên</h1>
<a href="?action=create">Thêm sinh viên</a>
<table with=100%>
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php
    foreach ($result as $each){
    ?>
    <tr>
        <td><?php echo $each['ma'] ?></td>
        <td><?php echo $each['hoTen'] ?></td>
        <td>
            <a href="?action=edit&ma=<?php echo $each['ma'] ?>">Sửa</a>
        </td>
        <td>
            <a href="?action=delete&ma=<?php echo $each['ma'] ?>">Xóa</a>
        </td>
    </tr>
    <?php
    }
    ?>

</table>