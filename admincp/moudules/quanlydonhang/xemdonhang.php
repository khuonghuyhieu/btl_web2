<?php
error_reporting(0);
$sql_lietke_dh = "SELECT * FROM cart_detail,sanpham WHERE cart_detail.id_sanpham=sanpham.id_sanpham AND cart_detail.code_cart='$_GET[code]' ORDER BY cart_detail.id_cart_detail DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<p>Liệt Kê Chi Tiết Đơn Hàng</p>
<table style="width:100%" border="1" style="border-collapse: collapse">
    <tr>
        <th>Thứ tự</th>
        <th>Mã Đơn Hàng</th>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phảm</th>
        <th>Hình Sản Phảm</th>
        <th>Số Lượng Mua</th>
        <th>Đơn Giá</th>
        <th>Thành Tiền</th>
    </tr>
    <?php
    $i = 0;
    $tongtien = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
        $thanhtien = $row['giasp'] * $row['soluongmua'];
        $tongtien += $thanhtien;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['masp'] ?></td>
            <td><?php echo $row['tensp'] ?></td>
            <td> <img src="moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" width="150px"> </td>
            <td><?php echo $row['soluongmua'] ?></td>
            <td><?php echo $row['giasp'] ?></td>
            <td><?php echo $thanhtien . '$' ?></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="8">
            <p>Tổng Tiền: <?php echo $tongtien . '$' ?></p>
        </td>
    </tr>

</table>