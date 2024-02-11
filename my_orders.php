<?php
session_start();
include 'connection.php';
$user_id = $_SESSION['user_id'];
$qr = "SELECT * FROM tbl_childcart 
        INNER JOIN tbl_mastcart USING(mastcart_id)  
        INNER JOIN product USING(product_id)  
        INNER JOIN users ON users.user_id = tbl_mastcart.user_id 
        INNER JOIN tbl_order USING(mastcart_id) 
        INNER JOIN user_address USING(user_address_id) 
        WHERE tbl_mastcart.user_id = '$user_id'";

$hh = select($qr);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content goes here -->
</head>
<body>

<div class="card">
    <h3 class="card-header text-center"><strong>New Orders</strong></h3><hr>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Product</th>
                <th>Prize</th>
                <th>Purchase Date</th>
                
               
            </tr>
            </thead>

            <tbody class="table-border-bottom-0">
            <?php
            $i = 1;
            foreach ($hh as $row) {
                $oid = $row['order_id'];
                $user = $row['name'];
                $order_date = $row['order_date'];
                $status = $row['cart_status'];
                $product = $row['product_name'];
                $mobile = $row['mobile_number'];
                $total = $row['tot_amount'];
                $order_date = $row['order_date'];
                $adress= $row['address'];
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $product; ?></td>
                    <td><?php echo $total; ?></td>
                    <td><?php echo $order_date; ?></td>
                    <td>COD</td>
                    
                </tr>

                
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Your footer and script tags go here -->

</body>
</html>

                    