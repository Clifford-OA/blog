<?php include('../../path.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/users.php'); 
adminOnly();
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Edit User</title>
</head>

<body>
    <!-- header  -->
    <?php include(ROOT_PATH . '/app/includes/adminHeader.php'); ?>

    <!--Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- left sidebar -->
        <?php include(ROOT_PATH . '/app/includes/adminSidebar.php'); ?>
        <!-- // left sidebar -->

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a class="btn btn-big" href="create.php">Add User</a>
                <a class="btn btn-big" href="index.php">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit User</h2>

                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>


                <form action="edit.php" method="post">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">

                    <div>
                        <label for="">Username</label>
                        <input type="text" value="<?php echo $username; ?>" name="username" class="text-input">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="email" value="<?php echo $email; ?>" name="email" class="text-input">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" value="<?php echo $password; ?>" name="password" class="text-input">
                    </div>
                    <div>
                        <label for="">Password Confirm</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                    </div>
                    <div>

                        <?php if (isset($admin) && $admin === 1) : ?>
                            <label>
                                <input type="checkbox" checked name="admin">
                                Admin
                            </label>
                        <?php else : ?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif; ?>


                    </div>
                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->




    <!-- Jquery script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

    <!-- Custom script -->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>