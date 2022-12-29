<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            font-family: "Lato";
            background: url("../images/backgroundImage.gif");
            color: white;
            overflow-x: hidden;
        }
        
    </style>
</head>
<body>
    <!-- Php code to access user id -->
    <?php 
    $user_ip = getIPAddress();
    $get_user = "Select * from `user_table` where user_ip = '$user_ip'";
    $result = mysqli_query($con,$get_user);
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query['user_id'];

    ?>
    <div class="container m-auto">
        <h2 class="text-center text-light">Payment Options</h2>
        <div class="row my-5   d-flex align-items-center justify-content-center">
            <div class="col-md-6  d-flex align-items-center justify-content-center">
            <a href="https://www.paytm.com"><img src="../images/paytm.png" width="200px"height="200px"  target="_blank"alt="paytm"></a>
            </div>
            <div class="col-md-6 ">
            <a href="order.php?user_id=<?php echo"$user_id"?>"><h2 class="text-center">Pay Offline</h2></a>
            </div>
        </div>
    </div>
</body>
</html>