<?php
            session_start();
            include 'connection.php';

            if (isset($_POST['submit'])) {
                $id = $_GET['id'];
                $price = $_POST['price'];
                $user_id = $_SESSION['user_id'];
                $qty = '1';
                $package_id = $_POST['package_id'];

                $q = "insert into tbl_mastcart values(null, '$user_id', '$price', 'pending')";
                $ids = insert($q);

                $qs = "insert into tbl_childcart values(null, '$ids', '$id', '$qty', curdate(), '$price', '$package_id')";
                insert($qs);

                header("Location: cart.php");
                exit();
            }
            ?>