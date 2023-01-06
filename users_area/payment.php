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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
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
        <h1 class="text-center text-light "style="margin-top:5%;">Payment Options</h1>
        <div class="row my-5   d-flex align-items-center justify-content-center">
            <div class="col-md-6  d-flex align-items-center justify-content-center">
            <a href="https://www.paytm.com"><img src="../images/paytm.png" class="rounded-circle"width="150px"height="150px"alt="paytm"></a>
            </div>
            <div class="col-md-6 ">
            <a class="text-decoration-none" href="order.php?user_id=<?php echo"$user_id"?>"><h3 class="text-center">Pay Offline</h3></a>
            </div>
        </div>
        <div class="text-center m-auto"><a href="../index.php"style="font-size: 20px;color:white;text-decoration:none;" ><i class="fa-solid fa-house"></i>Go Home</a></div>
    </div>
</body>
</html>