<div class="main">
    <?php
        if(isset($_GET['admin'])) {
            $tam = $_GET['admin'];
        } else {
            $tam = '';
        }
        if($tam == 'cat-list') {
            include ("main/cate_list.php");
        }elseif($tam == 'cat-add') {
            include ("main/cate_add.php");
        }elseif($tam == 'cat-edit') {
            include ("main/cate_edit.php");
        }elseif($tam == 'product-list') {
            include ("main/product_list.php");
        }elseif($tam == 'product-add') {
            include ("main/product_add.php");
        }elseif($tam == 'product-edit') {
            include ("main/product_edit.php");
        }elseif($tam == 'user-list') {
            include ("main/user_list.php");
        }elseif($tam == 'user-add') {
            include ("main/user_add.php");
        }elseif($tam == 'user-edit') {
            include ("main/user_edit.php");
        }
        
    ?>
</div>