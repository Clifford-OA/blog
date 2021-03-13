<?php include('path.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/users.php'); 
guestOnly();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital@1&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
</head>

<body>
    
    <!-- include header -->
    <?php include(ROOT_PATH .'/app/includes/header.php'); ?>



   
    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

            <div>
                <label for="">Username</label>
                <input type="text" value="<?php echo $username; ?>" name="username" class="text-input">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" value="<?php echo $password; ?>" name="password" class="text-input">
            </div>
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
                <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
            </div>
        </form>
    </div>


    <!-- Jquery script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Custom script -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>