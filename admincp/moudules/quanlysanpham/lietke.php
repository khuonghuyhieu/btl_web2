<?php
$sql_lietke_sp = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<p>Liệt Kê danh muc sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse">
    <tr>
        <th>Thứ tự</th>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá Sản Phẩm</th>
        <th>Hình Ảnh</th>
        <th>Nội Dung</th>
        <th>Quản Lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sp)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['masp'] ?></td>
            <td><?php echo $row['tensp'] ?></td>
            <td><?php echo $row['giasp'] ?></td>
            <td><?php echo $row['hinhanh'] ?></td>
            <td><?php echo $row['noidung'] ?></td>
            <td><a href="moudules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a></td>
        </tr>
    <?php
    }
    ?>
</table>