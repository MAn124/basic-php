<?php
            include '../../../config/connect.php';
            if(isset($_POST['btn_catadd'])) {
                $catname = $_POST['txtCateName'];
                $order = $_POST['txtOrder'];
                $keyword = $_POST['txtKeyword'];
                $description = $_POST['txtDesc'];
                $status = $_POST['rdoStatus'];

                $sql = "INSERT INTO category ( catname,cat_order, Keywords, Description, Cat_status) 
                VALUES ('$catname','$order', '$keyword', '$description', '$status')";
                $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                header("Location:../../index.php?admin=cat-list");
               
            } {
                $id = $_GET['id'];
                $sql_delete = "DELETE FROM category WHERE category_id ='" .$id."'";
                mysqli_query($mysqli, $sql_delete) or die(mysqli_error($mysqli));
                header("Location:../../index.php?admin=cat-list");
            } 
            
?>