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
    <!-- Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
    <title>User Registration</title>
    <style>
        body {
            font-family: "Lato";
            background: url("../images/backgroundImage.gif");
            color: white;
        }

        form {
            box-shadow: 1px 1px 5px white;
            background: rgba(0, 0, 0, 0.7);
            padding: 5px;
            border-radius: 15px;
        }

        form div {
            margin: 20px;
        }
    </style>
</head>

<body>

    <div class="container-fluid my-3">

        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <h2 class="text-center m-3">
                         User Registration
                    </h2>
                    <!-- Username field  -->
                    <div class="form-outline my-3">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" size="20" id="user_username" name="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required />
                    </div>
                    <!-- Email field  -->
                    <div class="form-outline my-3">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" size="50" id="user_email" name="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required />
                    </div>
                    <!-- Image field  -->
                    <div class="form-outline my-3">
                        <label for="user_image" class="form-label">User Image</label>
                        <input type="file"  id="user_image" name="user_image" class="form-control" required />
                    </div>
                    <!-- Password field  -->
                    <div class="form-outline my-3">
                        <label for="user_password" class="form-label">Enter Password</label>
                        <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required />
                    </div><!-- Confirm password field  -->
                    <div class="form-outline my-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" autocomplete="off" required />
                    </div>
                    <!-- User address field  -->
                    <div class="form-outline my-3">
                        <label for="user_address" class="form-label">User Address</label>
                        <input type="text" id="user_address" name="user_address" class="form-control" placeholder="Enter your address" autocomplete="off" required />
                    </div>
                    <!-- User contact field  -->
                    <div class="form-outline my-3">
                        <label for="user_contact" class="form-label">User Contact</label>
                        <input type="text" id="user_contact" name="user_contact" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required />
                    </div>
                    <div class="text-center my-4">
                        <input type="submit" value="Register" name="user_register" class="btn bg-primary text-light p-2 mb-3" style="border-radius: 10px;">
                        <p class="small fw-bold">Already have an account ? <a href="userLogin.php" style="text-decoration:none;color:orangered;">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
if(isset($_POST['user_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    
    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];
    move_uploaded_file($user_image_temp,"users_images/$user_image");

    $user_password = $_POST['user_password'];
    $confirm_password = $_POST['confirm_password'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];
    $user_ip = getIPAddress();
    //insert query
    $insert_query = "insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_contact) values('$user_username','$user_email','$user_password','$user_image','$user_ip','$user_address','$user_contact')";
    $sql_execute = mysqli_query($con,$insert_query);
 
    if($sql_execute){
        echo"<script>alert('Registered successfully!');</script>";
    }else{
        die(mysqli_errno($con));
    }
    
}
?>