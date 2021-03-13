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

    <title>Admin Section - Manage User</title>
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
                <h2 class="page-title">Manage Users</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>

                        <?php foreach ($admin_users as $key => $user): ?>

                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
                        </tr>
                        
                        <?php endforeach ?>

                    </tbody>
                </table>
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