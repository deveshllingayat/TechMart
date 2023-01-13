<?php
include('../includes/connect.php');
include('../functions/common_function.php');

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}
//fetchin product_id and quantity
$get_ip_address = getIPAddress();
$cart_query_price = "Select * from `cart_details` where ip_address = '$get_ip_address'";
$result_cart_price = mysqli_query($con, $cart_query_price);
while ($row_data = mysqli_fetch_array($result_cart_price)) {
    $product_id_arr = array($row_data['product_id']);
    $product_id = $row_data['product_id'];
    $get_cart = "select * from `cart_details` where product_id=$product_id";
    $run_cart = mysqli_query($con, $get_cart);
    $get_item_quantity = mysqli_fetch_array($run_cart);
    $quantity = $get_item_quantity['quantity'];
    if ($quantity == 0) {
        $quantity = 1;
        $quantity_array = array($quantity);
    } else {
        $quantity = $quantity;
        $quantity_array = array($quantity);
    }
}
//to store array of product ids and quantities in the database we are serializing the array values

$serialized_product_id = serialize($product_id_arr);
$serialized_quantity = serialize($quantity_array);
// to unserialize array 
// $array will contain ( product id's )
// $array = unserialize( $serialized_product_id );

$invoice_number = mt_rand();
$status = 'pending';
//total items and total price OF all items
$total_products = mysqli_num_rows($result_cart_price);
$subtotal = total_cart_price();

$insert_orders = "insert into `user_orders` (user_id,amount_due,invoice_number,total_products,order_date,order_status) values ($user_id,$subtotal,$invoice_number,$total_products,NOW(),'$status')";
$result_insert_orders = mysqli_query($con, $insert_orders);
if ($result_insert_orders) {
    echo "<script>alert('Orders are submitted successfully!');</script>";
    echo "<script>window.open('profile.php','_self');</script>";
}
// orders pending
$insert_pending_orders = "Insert into `orders_pending` (user_id,invoice_number,product_id,quantity,order_status) values ($user_id,$invoice_number,'$serialized_product_id','$serialized_quantity','$status')";
$result_pending_orders = mysqli_query($con, $insert_pending_orders);

$empty_cart = "Delete from `cart_details` where ip_address = '$get_ip_address'";
$result_delete = mysqli_query($con, $empty_cart);

?>