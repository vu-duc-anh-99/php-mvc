<div>
    <form action="" method="get">
        <input type="hidden" name = "controller" value="sinh-vien">
        <input type="hidden" name = "action" value="search">
        <td><input type="text" name="keyword" placeholder = "Nhập tên"></td>
        <td><input type="submit" value = "Tìm kiếm"></td>
    </form>
</div>
<div>
<a href="index.php?controller=sinh-vien&action=add">thêm</a>
    <h3>Danh sách sinh viên</h3>
    <table>
        <thead>
            <tr>
                <th>Tên</th>
                <th>Năm sinh</th>
                <th>Quê quán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $value['hoten']?></td>
                    <td><?php echo $value['namsinh']?></td>
                    <td><?php echo $value['quequan']?></td>
                    <td>
                        <a href="index.php?controller=sinh-vien&action=update&id=<?php echo $value['id']; ?>">Edit</a>
                        <a href="index.php?controller=sinh-vien&action=delete&id=<?php echo $value['id']; ?>"
                        onclick = "if (!(confirm('Bạn có chắc muốn xóa sinh viên này?'))) return false"
                        >Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>