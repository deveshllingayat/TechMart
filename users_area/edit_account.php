<?php
if (isset($_GET['edit_account'])) {
    $user_session_name = $_SESSION['username'];
    $select_query = "Select * from `user_table` where username = '$user_session_name'";
    $result_query = mysqli_query($con, $select_query);
    $row_fetch = mysqli_fetch_assoc($result_query);
    $user_id = $row_fetch['user_id'];
    $username = $row_fetch['username'];
    $user_email = $row_fetch['user_email'];
    $user_address = $row_fetch['user_address'];
    $user_contact = $row_fetch['user_contact'];
}
    if (isset($_POST['user_update'])) {
        $update_id = $user_id;
        $name = $_POST['user_username'];
        $email = $_POST['user_email'];
        $address = $_POST['user_address'];
        $contact = $_POST['user_contact'];
        $user_image = $_FILES['user_image']['name'];
        $user_image_temp = $_FILES['user_image']['tmp_name'];
        move_uploaded_file($user_image_temp,"./users_images/$user_image");

        //update query
        $update_data  = "update `user_table` set username='$name',user_email='$email',user_image ='$user_image',user_address='$address',user_contact='$contact' where user_id=$update_id";
        $result_update_query = mysqli_query($con,$update_data);
        if($result_update_query) {
            echo"<script>alert('Profile Update Successfully!');</script>";
            echo"<script>window.open('logout.php','_self');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>

<body>
    <h3 class="text-center text-light my-3">Edit Account</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" value="<?php echo "$username" ?>" name="user_username">
        </div>
        <div class="form-outline mb-4">
            <input type="email" class="form-control w-50 m-auto" value="<?php echo "$user_email" ?>" name="user_email">
        </div>
        <div class="form-outline d-flex mb-4 w-50 m-auto">
            <img src="./users_images/<?php echo "$user_image"; ?>" alt="user_image" class="profile_img w-25 mx-2">
            <input type="file" class="form-control w-75 m-auto" name="user_image">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" value="<?php echo "$user_address" ?>" name="user_address">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" value="<?php echo "$user_contact" ?>" name="user_contact">
        </div>
        <button type="submit"name="user_update" class="btn btn-primary text-light px-3 py-2 mb-3" style="border-radius:10px;">Update</button>
    </form>
</body>

</html>