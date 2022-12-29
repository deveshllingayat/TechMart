<?php 
include('../includes/connect.php');
include('../functions/common_function.php');

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    
}
//total items and total price OF all items
$get_ip_address = getIPAddress();
$cart_query_price = "Select * from `cart_details` where ip_address = '$get_ip_address'";
$result_cart_price = mysqli_query($con,$cart_query_price);
$invoice_number = mt_rand();
$status = 'pending';
$total_products = mysqli_num_rows($result_cart_price);
$subtotal = total_cart_price();

$insert_orders = "insert into `user_orders` (user_id,amount_due,invoice_number,total_products,order_date,order_status) values ($user_id,$subtotal,$invoice_number,$total_products,NOW(),'$status')";
$result_insert_orders = mysqli_query($con,$insert_orders);
if($result_insert_orders){
    echo"<script>alert('Orders are submitted successfully!');</script>";
    echo"<script>window.open('profile.php','_self');</script>";
}
?>
