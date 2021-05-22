<?php
$sql_product = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$sql_query = mysqli_query($mysqli, $sql_product);
?>

<?php
while ($row = mysqli_fetch_array($sql_query)) {
?>
    <div class="row blocks-spacer">
        <div class="span5">
            <div class="product-preview">
                <div class="picture">
                    <img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" alt="" width="940" height="940" id="mainPreviewImg" />
                </div>
                <div class="thumbs clearfix">
                    <div class="thumb active">
                        <a href="#mainPreviewImg"><img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" alt="" width="940" height="940" /></a>
                    </div>
                    <div class="thumb">
                        <a href="#mainPreviewImg"><img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" alt="" width="940" height="940" /></a>
                    </div>
                    <div class="thumb">
                        <a href="#mainPreviewImg"><img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" alt="" width="940" height="940" /></a>
                    </div>
                    <div class="thumb">
                        <a href="#mainPreviewImg"><img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" alt="" width="940" height="940" /></a>
                    </div>
                    <div class="thumb">
                        <a href="#mainPreviewImg"><img src="admincp/moudules/quanlysanpham/uploadImg/<?php echo $row['hinhanh'] ?>" alt="" width="940" height="940" /></a>
                    </div>
                </div>
            </div>
        </div>


        <form method="POST" action="page/xuLyThemGioHang.php?idsanpham=<?php echo $row['id_sanpham'] ?>">
            <div class="span7">
                <div class="product-title">
                    <h1 class="name"><?php echo $row['tensp'] ?></h1>
                    <div class="meta">
                        <span class="tag"><?php echo $row['giasp'] ?></span>
                        <span class="stock">
                            <span class="btn btn-success">In Stock</span>
                            <span class="btn btn-danger">Out of Stock</span>
                            <span class="btn btn-warning">Ask for availability</span>
                        </span>
                    </div>
                </div>
                <div class="product-description">
                    <p><?php echo $row['noidung'] ?></p>
                    <hr />



                    <form action="#" class="form form-inline clearfix">
                        <div class="numbered">
                            <input type="text" name="num" value="<?php echo $row['soluong'] ?>" class="tiny-size" />
                            <span class="clickable add-one icon-plus-sign-alt"></span>
                            <span class="clickable remove-one icon-minus-sign-alt"></span>
                        </div>
                        <button class="btn btn-danger pull-right" name="themgiohang"><i class="icon-shopping-cart"></i> &nbsp; Add To Cart</button>
                    </form>
                    <hr />



                    <div class="share-item push-down-20">
                        <div class="row-fluid">
                            <div class="span5">
                                Share this item with friends:
                            </div>
                            <div class="span7">
                                <div class="social-networks">

                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_pinterest_pinit"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                    </div>
                                    <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977"></script>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="store-buttons">
                        <i class="icon-heart"></i> <a href="#">Add to a wishlist</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                        <i class="icon-exchange"></i> <a href="#">Add to compare</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                        <i class="icon-envelope-alt"></i> <a href="#">Email to a friend</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php
}
?>