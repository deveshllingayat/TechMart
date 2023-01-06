<?php
include('../includes/connect.php');
session_start();
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    $select_data = "select * from `user_orders` where order_id = $order_id";
    $result = mysqli_query($con,$select_data);
    $row_fetch = mysqli_fetch_assoc($result);
    $invoice_number = $row_fetch['invoice_number'];
    $amount_due = $row_fetch['amount_due'];
 
}
if(isset($_POST['confirm_payment'])){
    $invoice = $_POST['invoice'];
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];
    $insert_query = "insert into `user_payments` (order_id,invoice_number,amount,payment_mode) values ($order_id,$invoice,$amount,'$payment_mode')";
    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('Successfully Completed the payment')</script>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_order_status = "update `user_orders` set order_status = 'Complete' where order_id = $order_id";
    $result_update = mysqli_query($con,$update_order_status);
    $delete_pending_orders = "delete from `orders_pending` where order_id = $order_id";
    $result_delete = mysqli_query($con,$delete_pending_orders);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <div class="container my-5">
        <h1 class="text-center">Confirm Payment</h1>
        <form action=""method="post">
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="text" class="form-control w-50 m-auto"name="invoice"value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for=""class="text-light my-2">Amount</label>
                <input type="text" class="form-control w-50 m-auto"name="amount"value="<?php echo $amount_due ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
               <select name="payment_mode" class="form-select w-50 m-auto">
                <option>Select Payment Mode</option>
                <option>UPI</option>
                <option>PayTm</option>
                <option>NetBanking</option>
                <option>Cash On Delivery</option>
                <option>Pay Offline</option>
               </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" value="Confirm"class="bg-primary text-light py-2 px-3 border-0"name="confirm_payment"style="border-radius:15px;">
            </div>
        </form>
    </div>
</body>

</html>