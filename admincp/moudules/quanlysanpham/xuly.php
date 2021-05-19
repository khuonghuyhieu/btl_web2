<?php

include('../../config/connect.php');

$masp = $_POST['masp'];
$gia = $_POST['giasp'];
$tensp = $_POST['tensp'];
$content = $_POST['noidung'];
$img = $_FILES['hinhanh']['name'];
$img_tmp = $_FILES['hinhanh']['tmp_name'];



if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO sanpham(masp,tensp,giasp,hinhanh,noidung) VALUE('" . $masp . "','" . $tensp . "','" . $gia . "','" . $img . "','" . $content . "')";
    move_uploaded_file($img_tmp, 'uploadImg/' . $img);
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else if (isset($_POST['suasanpham'])) {
    $sql_them = "UPDATE sanpham SET masp='" . $masp . "',tensp='" . $tensp . "',giasp='" . $gia . "',hinhanh='" . $img . "',noidung='" . $content . "' WHERE id_sanpham='$_GET[idsanpham]'";
    move_uploaded_file($img_tmp, 'uploadImg/' . $img);
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else {
    $id = $_GET['idsanpham'];
    $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
