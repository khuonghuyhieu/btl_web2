<?php
$sql = "SELECT * FROM sanpham WHERE id_sanpham <= 35";
$sql_query = mysqli_query($mysqli, $sql);
?>

<?php
while ($row = mysqli_fetch_array($sql_query)) {
?>
    <div class="span4">
        <div class="product">
            <div class="product-img featured">
                <div class="picture">
                    <a href="product.html"><img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" alt="" width="518" height="358" /></a>
                    <div class="img-overlay">
                        <a href="product.html" class="btn more btn-primary">More</a>
                        <a href="#" class="btn buy btn-danger">Buy</a>
                    </div>
                </div>
            </div>
            <div class="main-titles">
                <h4 class="title"><?php echo $row['giasp'] ?></h4>
                <h5 class="no-margin"><a href="product.html"><?php echo $row['tensp'] ?></a></h5>
            </div>
            <p class="desc"><?php echo $row['noidung'] ?></p>
        </div>
    </div>
<?php
}
?>