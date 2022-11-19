<?php
            include '../../../config/connect.php';
            $productname = $_POST['txtName'];
            $price = $_POST['txtPrice'];
            $quantity = $_POST['txtQuantity'];
            $content = $_POST['txtContent'];
            $productkeyword = $_POST['txtOrder'];
            $desc = $_POST['desc'];
            $image_name = $_FILES['fImages']['name'];
            $image_name_tmp = $_FILES['fImages']['tmp_name'];
            $status = $_POST['rdoStatus'];
            if(isset($_POST['pro_add'])) {
                

                $sql = "INSERT INTO product (product_name,product_price	,product_quantity,product_content,product_images,product_keyword,product_desc,product_status) 
                VALUES ('$productname','$price', '$quantity', '$content', '$image_name','$productkeyword', '$desc', '$status')";
                $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                move_uploaded_file($image_name_tmp, '../../upload/' .$image_name);
                header("Location:../../index.php?admin=product-list");
               
            } {
                $id = $_GET['id'];
                $sql_search = "SELECT * FROM product WHERE product_id = '$id' LIMIT 1";
                $query = mysqli_query($mysqli, $sql_search) or die(mysqli_error($mysqli));
                while($row = mysqli_fetch_array($query)){
                    unlink('../../upload/' . $row['product_images']);
                }
                $sql_delete = "DELETE FROM product WHERE product_id ='" .$id."'";
                mysqli_query($mysqli, $sql_delete) or die(mysqli_error($mysqli));
                header("Location:../../index.php?admin=product-list");
            } 
            
?>