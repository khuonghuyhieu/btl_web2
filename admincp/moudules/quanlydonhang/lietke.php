<?php
$sql_lietke_dh = "SELECT * FROM cart ORDER BY id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<p>Liệt Kê Đơn Hàng</p>
<table style="width:100%" border="1" style="border-collapse: collapse">
    <tr>
        <th>Thứ tự</th>
        <th>Mã Đơn Hàng</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td>
                <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>