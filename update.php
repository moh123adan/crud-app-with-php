<?php
include "header.php";
include 'connection.php';


$id = $_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$password = $row['password'];



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];



    $sql = "update `crud` set id=$id, name='$name', email='$email', phone='$email', password='$password' where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "updated succsfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
            <label>phone</label>
            <input type="phone" class="form-control" placeholder="Enter your phone" name="phone" value="<?php echo $phone ?>">
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo $password ?>">
        </div>


        <button type="submit" class="btn btn-primary mt-4" name="submit">Update</button>

    </form>
</div>

</body>

</html>