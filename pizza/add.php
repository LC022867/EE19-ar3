<?php

//if (isset($_GET['submit'])) {
//    echo $_GET['email'];
//    echo $_GET['title'];
//    echo $_GET['ingredients'];
//}

if (isset($_GET['submit'])) {
    echo $_POST['email'];
    echo $_POST['username'];
    echo $_POST['password'];
}

?>


<!DOCTYPE html>
<html>

<?php include('header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Log in</h4>
    <form action="add.php" class="white" method="POST">
        <label for="">Your Email</label>
        <input type="text" name="email">
        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Password</label>
        <input type="password" name="password">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>


<?php include('footer.php'); ?>



</html>