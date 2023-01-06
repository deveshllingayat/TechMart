
    <h2 class="text-light "style="margin-top:15%">Delete Account</h2>
    <form action="" method="post"class="mt-5">
        <div class="form-outline mb-4">
            <button type="submit"  class="btn btn-danger border-0 w-25 m-auto" name="delete">Delete Account</button>
        </div>
        <div class="form-outline mb-4">
            <button type="submit"class="btn btn-secondary w-25 m-auto" name="dont_delete">Don't Delete Account</button>
        </div>
    </form>
<?php 
$username = $_SESSION['username'];
if(isset($_POST['delete'])){
    $delete_query = "delete from `user_table` where username='$username'";
    $result = mysqli_query($con,$delete_query);
    if($result){
        session_destroy();
        echo"<script>alert('Account deleted Successfully!');
        window.open('../index.php','_self')</script>";
    }
}
if(isset($_POST['dont_delete'])){
    echo"<script>window.open('profile.php','_self')</script>";
}
?>
