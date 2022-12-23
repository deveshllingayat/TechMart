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
    <title>User Login</title>
    <style>
        body {
            font-family: "Lato";
            background: url("../images/backgroundImage.gif");
            color: white;
        }

        .loginForm {
            margin-top:15%;
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
    <div class="container-fluid my-3 vertical-align-middle">

        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/formdata"class="loginForm">
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
                        <input type="submit" value="Login" name="user_login" class="btn bg-primary text-light p-2 mb-2" style="border-radius: 10px;">
                        <p class="small fw-bold">Don't have an account ? <a href="user_registration.php" style="text-decoration:none;">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>