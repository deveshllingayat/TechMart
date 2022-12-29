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
$total_items = mysqli_num_rows($result_cart_price);
echo$total_items." ";
echo total_cart_price();

?>
