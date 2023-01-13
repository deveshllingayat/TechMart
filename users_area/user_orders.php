<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $username = $_SESSION['username'];
    $get_user = "select * from `user_table` where username='$username'";
    $result = mysqli_query($con, $get_user);
    $row_fetch = mysqli_fetch_assoc($result);
    $user_id = $row_fetch['user_id'];
    ?>
    <?php
    $get_order_details = "Select * from `user_orders` where user_id = $user_id";
    $result_orders = mysqli_query($con, $get_order_details);
    $count_order = mysqli_num_rows($result_orders);
    if ($count_order > 0) {
        echo " <h1 class='text-center text-light my-3'>All Orders</h1>
            <table class='table text-light mt-5'>
                <thead class='bg-dark''>
                <tr>
                    <th>S.No.</th>
                    <th>Amount Due</th>
                    <th>Total Products</th>
                    <th>Invoice Number</th>
                    <th>Date</th>
                    <th>Complete/Incomplete</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody > ";
        $Sno = 1;
        while ($row_orders = mysqli_fetch_assoc($result_orders)) {
            $order_id = $row_orders['order_id'];
            $amount_due = $row_orders['amount_due'];
            $total_products = $row_orders['total_products'];
            $invoice_number = $row_orders['invoice_number'];
            $order_date = $row_orders['order_date'];
            $order_status = $row_orders['order_status'];
            if ($order_status == 'pending') {
                $order_status = 'Incomplete';
            } else {
                $order_status = 'Complete';
            }
            echo "<tr class='bg-light text-dark'>
            <td>$Sno</td>
            <td>&#x20B9; $amount_due</td>
            <td>$total_products</td>
            <td>$invoice_number</td>
            <td>$order_date</td>
            <td>$order_status</td>;" ?>
    <?php
            if ($order_status == 'Complete') {
                echo "<td>Paid</td></tr></tbody>";
            } else {
                echo "<td><a href='confirm_payment.php?order_id=$order_id'class='text-dark'>Confirm</a></td></tr></tbody>";
            }
            $Sno += 1;
        }
    } else {
        echo "<h3 class='text-center text-light'style='margin-top:20%'>It seems that you have not ordered yet?</h3>
        <a href='../displayAll.php'class='text-info text-decoration-none'>Catalog</a>";
    }

    ?>



    </table>

</body>

</html>