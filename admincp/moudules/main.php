<div class="main">
    <?php

    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }
    if ($tam == 'quanlysanpham' && $query == 'them') {
        include('moudules/quanlysanpham/them.php');
        include('moudules/quanlysanpham/lietke.php');
    } else if ($tam == 'quanlysanpham' && $query == 'sua') {
        include('moudules/quanlysanpham/sua.php');
    } else if ($tam == 'quanlydonhang' && $query == 'lietke') {
        include('moudules/quanlydonhang/lietke.php');
    } else if ($tam == 'donhang' && $query == 'xemdonhang') {
        include('moudules/quanlydonhang/xemdonhang.php');
    } else {
        include("moudules/dashboard.php");
    }

    ?>

</div>