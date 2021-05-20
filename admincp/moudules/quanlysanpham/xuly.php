<?php

include('../../config/connect.php');

$masp = $_POST['masp'];
$gia = $_POST['giasp'];
$tensp = $_POST['tensp'];
$content = $_POST['noidung'];
$img = $_FILES['hinhanh']['name'];
$img_tmp = $_FILES['hinhanh']['tmp_name'];
$img = time() . '_' . $img;


if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO sanpham(masp,tensp,giasp,hinhanh,noidung) VALUE('" . $masp . "','" . $tensp . "','" . $gia . "','" . $img . "','" . $content . "')";
    move_uploaded_file($img_tmp, 'uploadImg/' . $img);
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else if (isset($_POST['suasanpham'])) {
    //sua
    if ($img != '') {
        move_uploaded_file($img_tmp, 'uploadImg/' . $img);

        $sql = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploadImg/' . $row['hinhanh']);
        }

        $sql_update = "UPDATE sanpham SET masp='" . $masp . "',tensp='" . $tensp . "',giasp='" . $gia . "',hinhanh='" . $img . "',noidung='" . $content . "' WHERE id_sanpham='$_GET[idsanpham]'";
    } else {
        $sql_update = "UPDATE sanpham SET masp='" . $masp . "',tensp='" . $tensp . "',giasp='" . $gia . "',noidung='" . $content . "' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else {
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploadImg/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
