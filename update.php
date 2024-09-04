<?php

<?php
include "header.php";
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];



    $sql = "insert into `crud` (name, email, phone, password) values('$name', '$email', '$phone', '$password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
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
            <input type="text" class="form-control" placeholder="Enter your name" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email">
        </div>
        <div class="form-group">
            <label>phone</label>
            <input type="phone" class="form-control" placeholder="Enter your phone" name="phone">
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password">
        </div>


        <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>

    </form>
</div>

</body>

</html>



?>