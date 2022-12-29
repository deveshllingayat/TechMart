<!DOCTYPE html>
<html lang="en">
<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
    <title>User Login</title>
    <style>
        body {
            font-family: "Lato";
            background: url("../images/backgroundImage.gif");
            color: white;
            overflow-x: hidden;
        }

        .loginForm {
            box-shadow: 1px 1px 5px white;
            background: rgba(0, 0, 0, 0.7);
            padding: 5px;
            border-radius: 15px;
        }

        .form-outline {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid my-3 ">

        <div class="row d-flex  justify-content-center">
            <div class="col-lg-10 col-xl-5">
                <form action="" method="post" class="loginForm mt-3">
                    <!-- Username field  -->
                    <h2 class="text-center m-3">
                        Login
                    </h2>
                    <div class="form-outline my-3">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" size="20" id="user_username" name="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required />
                    </div>
                    <!-- Password field  -->
                    <div class="form-outline my-3">
                        <label for="user_password" class="form-label">Enter Password</label>
                        <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required />
                    </div>

                    <div class="text-center my-4">
                        <input type="submit" value="Login" name="user_login" class="btn bg-primary text-light p-2 mb-3" style="border-radius: 10px;">
                        <p class="small fw-bold">Don't have an account ? <a href="user_registration.php" style="text-decoration:none;color:orangered;">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-xl-1 mt-3" ><a href="../index.php"style="font-size: 30px; color:darkgrey;" ><i class="fa-solid fa-xmark"></i></a></div>
        </div>
    </div>
</body>

</html>
<?php

if(isset($_POST['user_login'])){
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $select_query = "Select * from `user_table` where username= '$user_username'";
    $result_query = mysqli_query($con,$select_query);
    $rows_count = mysqli_num_rows($result_query);
    $row_data = mysqli_fetch_assoc($result_query);
    $user_ip = getIPAddress();
    $select_query_cart = "Select * from `cart_details` where ip_address= '$user_ip'";
    $select_cart = mysqli_query($con,$select_query_cart);
    $rows_count_cart = mysqli_num_rows($select_cart);

    if($rows_count>0){
        if(password_verify($user_password,$row_data['user_password'] )){
            $_SESSION['username'] = $user_username;
            if($rows_count==1 and $rows_count_cart==0){
                $_SESSION['username'] = $user_username;
            echo"<script>
                alert('Login Successful!');
                window.open('profile.php','_self');
            </script>";
            }else{
                $_SESSION['username'] = $user_username;
                echo"<script>
                alert('Login Successful!');
                window.open('payment.php','_self');
                </script>";
            }
            
        }else{
            echo"<script>alert('Invalid Credentials!');</script>";
        }
    }else{
        echo"<script>alert('Invalid Credentials!');</script>";
    }
}

   
?>
