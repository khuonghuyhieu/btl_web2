<?php
$sql_sua_sp = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>

<p class="title_them">Sửa Sản Phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="moudules/quanlysanpham/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_sp)) {
        ?>
            <tr>
                <td>Mã sản phẩm</td>
                <td><input style="width:50%;" type="text" name="masp" value="<?php echo $dong['masp'] ?>"></td>
            </tr>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input style="width:50%;" type="text" name="tensp" value="<?php echo $dong['tensp'] ?>"></td>
            </tr>
            <tr>
                <td>Giá Sản Phẩm</td>
                <td><input style="width:50%;" type="text" name="giasp" value="<?php echo $dong['giasp'] ?>"></td>
            </tr>

            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="hinhanh" value="<?php echo $dong['hinhanh'] ?>"></td>
            </tr>

            <tr>
                <td>Nội dung</td>
                <td><textarea row="10" width="100%" style="resize: none;" name="noidung" value="<?php echo $dong['noidung'] ?>"></textarea></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="suasanpham" value="Sửa Sản Phẩm"></td>
            </tr>
        <?php
        }
        ?>

    </form>
</table>