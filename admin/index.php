<?php
include_once 'includes/header.php';
include_once 'includes/navbar.php';
include_once 'db/condb.php';

if ($_SESSION['MenuRole'] == 'แอดมิน') {
} else {
    header('location: index.php');
}
?>
<?php if (isset($_SESSION['loginsuccess'])) { ?>
    <div class='wrapper'>

        <!-- Main Sidebar Container -->
        <aside class='main-sidebar sidebar-dark-primary elevation-4'>
            <!-- Brand Logo -->
            <a href='/admin/index.php' class='brand-link text-center'>
                <span class='brand-text font-weight-light'>มาตามหารักแท้</span>
            </a>

            <!-- Sidebar -->
            <div class='sidebar'>
                <!-- Sidebar user panel (optional) -->
                <div class='user-panel mt-3 pb-3 mb-3 d-flex'>
                    <div class='image'>
                        <img src='dist/img/user2-160x160.jpg' class='img-circle elevation-2' alt='User Image' />
                    </div>
                    <div class='info'>
                        <a href='/admin/Users.php' class='d-block'><?php echo $_SESSION['MenuName'] ?> </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <?php if ($_SESSION['MenuRole'] == 'แอดมิน') { ?>
                    <nav class='mt-2'>
                        <ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
                            <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

                            <li class='nav-item'>
                                <a href='/admin/Product.php' class='nav-link '>
                                    <i class='nav-icon fas fa-users'></i>
                                    <p>
                                        PRODUCT
                                    </p>
                                </a>
                            </li>
                            <li class='nav-item'>
                                <a href='/admin/Member.php' class='nav-link '>
                                    <i class='nav-icon fas fa-users'></i>
                                    <p>
                                        Member
                                    </p>
                                </a>
                            </li>
                            <li class='nav-item'>
                                <a href='/admin/logout.php' class='nav-link'>
                                    <i class='nav-icon fas fa-sign-out-alt'></i>
                                    <p>
                                        ออกจากระบบ
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                <?php } ?>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class='content-wrapper p-4'>


          
         </div>

        <?php include_once 'includes/content-footer.php'; ?>
    </div>
<?php } else {
    header("Location: ../admin/login.php");
}
?>

<!-- ./wrapper -->
<?php
include_once 'includes/footer.php';
?>