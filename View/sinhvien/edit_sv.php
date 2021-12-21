<div>
    <h3>Sửa sinh viên</h3>
    <a href="index.php?controller=sinh-vien&action=list">Danh sách sinh viên</a>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tên sinh viên: </td>
                <td><input type="text" name="hoten" value="<?php echo $data['hoten'] ?>"></td>
            </tr>
            <tr>
                <td>Tuổi: </td>
                <td><input type="text" name="namsinh" value="<?php echo $data['namsinh'] ?>"></td>
            </tr>
            <tr>
                <td>Quê quán </td>
                <td><input type="text" name="quequan" value="<?php echo $data['quequan'] ?>"></td>
            </tr>
        </table>
        <input type="submit" name = "edit_sv"value="Sửa">
    </form>
    <?php if(isset($message) && $message != ""){
        echo $message;
    }?>
</div>