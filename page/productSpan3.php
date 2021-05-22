<?php
$sql = "SELECT * FROM sanpham";
$sql_query = mysqli_query($mysqli, $sql);
?>

<?php
while ($row = mysqli_fetch_array($sql_query)) {
?>
    <div class="span3">
        <div class="product">
            <div class="product-inner">
                <div class="product-img">
                    <div class="picture">
                        <a href="product.html"><img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" alt="" width="540" height="374" /></a>
                        <div class="img-overlay">
                            <a href="product.html" class="btn more btn-primary">More</a>
                            <a href="#" class="btn buy btn-danger">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="main-titles no-margin">
                    <h4 class="title"><?php echo $row['giasp'] ?></h4>
                    <h5 class="no-margin"><?php echo $row['tensp'] ?></h5>
                </div>
                <p class="desc"><?php echo $row['noidung'] ?></p>
                <div class="row-fluid hidden-line">
                    <div class="span6">
                        <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                    </div>
                    <div class="span6 align-right">
                        <span class="icon-star stars-clr"></span>
                        <span class="icon-star stars-clr"></span>
                        <span class="icon-star stars-clr"></span>
                        <span class="icon-star stars-clr"></span>
                        <span class="icon-star stars-clr"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>