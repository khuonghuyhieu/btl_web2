<?php
// error_reporting(0);
session_start();
include('../admincp/config/connect.php');
if (isset($_POST['themgiohang'])) {
    //session_destroy();
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM sanpham WHERE id_sanpham='" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array('tensp' => $row['tensp'], 'id_sanpham' => $id, 'soluong' => $soluong, 'giasp' => $row['giasp'], 'hinhanh' => $row['hinhanh'], 'masp' => $row['masp']));
        //kiem tra session gio hang ton tai
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                if ($cart_item['id_sanpham'] == $id) {
                    $product[] = array('tensp' => $cart_item['tensp'], 'id_sanpham' => $cart_item['id_sanpham'], 'soluong' => $soluong + 1, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
                    $found = true;
                } else {
                    $product[] = array('tensp' => $cart_item['tensp'], 'id_sanpham' => $cart_item['id_sanpham'], 'soluong' => $soluong, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
                }
            }
            if ($found == false) {
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    // print_r($_SESSION['cart']);
    header('Location:../checkout-step-1.php');
}
