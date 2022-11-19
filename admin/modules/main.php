<div class="main">
    <?php
        if(isset($_GET['admin'])) {
            $tam = $_GET['admin'];
        } else {
            $tam = '';
        }
        if($tam == 'cat-list') {
            include ("modules/categories/cate_list.php");
        }elseif($tam == 'cat-add') {
            include ("modules/categories/cate_add.php");
        }elseif($tam == 'cat-edit') {
            include ("modules/categories/cate_edit.php");
        }elseif($tam == 'product-list') {
            include ("modules/product/product_list.php");
        }elseif($tam == 'product-add') {
            include ("modules/product/product_add.php");
        }elseif($tam == 'product-edit') {
            include ("modules/product/product_edit.php");
        }elseif($tam == 'user-list') {
            include ("modules/user/user_list.php");
        }elseif($tam == 'user-add') {
            include ("modules/user/user_add.php");
        }elseif($tam == 'user-edit') {
            include ("modules/user/user_edit.php");
        }
        
    ?>
</div>