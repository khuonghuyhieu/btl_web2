<?php
session_start();
include('../admincp/config/connect.php');
$code_order = rand(0, 9999);
$insert_cart = "INSERT INTO cart(code_cart,cart_status) VALUE ('" . $code_order . "',1)";
$cart_query = mysqli_query($mysqli, $insert_cart);

if ($insert_cart) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id_sanpham'];
        $soluong = $value['soluong'];
        $insert_cart_detail = "INSERT INTO cart_detail(id_sanpham,code_cart,soluongmua) VALUE ('" . $id_sanpham . "','" . $code_order . "','" . $soluong . "')";
        mysqli_query($mysqli, $insert_cart_detail);
    }
}
unset($_SESSION['cart']);
header('Location: ../checkout-step-1.php');
