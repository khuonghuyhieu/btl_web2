<?php
error_reporting(0);
if (isset($_SESSION['cart'])) {
    $tongtien = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
        $tongtien += $thanhtien;
?>
        <tr>
            <td class="image"><img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $cart_item['hinhanh']; ?>" alt="" width="124" height="124" /></td>
            <td class="desc"><?php echo $cart_item['tensp']; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="page/xuLyThemGioHang.php?delete=<?php echo $cart_item['id_sanpham'] ?>">Xóa</a>
            </td>
            <td class="qty">
                <input type="text" class="tiny-size" value="<?php echo $cart_item['soluong']; ?>" />
            </td>
            <td class="price">
                <?php echo '$' . $thanhtien; ?>
            </td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="2" class="stronger">Total Amount:</td>
        <td colspan="2" class="stronger">
            <div class="size-16 align-right"><?php echo '$' . $tongtien ?></div>
        </td>
    </tr>
<?php
}
?>