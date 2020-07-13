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
                                <a href='/admin/Product.php' class='nav-link active'>
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
                <?php }  ?>
                   
               

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class='content-wrapper p-4'>

            <?php include_once 'App/Product/Add.php' ?>
            <?php include_once 'App/Product/Edit.php' ?>
            <?php include_once 'App/Product/Delete.php' ?>

            <div class="row ml-1">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body ">
                        <p class="card-text " style="font-size: 18px;"><b>เพิ่มสินค้า</b></p>
                        <button type="button" class="btn btn-success btn-circle btn-xl edit" data-toggle="modal" data-target="#addthesis" style="width: 70px;height: 70px; padding: 10px 16px; border-radius: 35px; font-size: 24px;line-height: 1.33;">
                            <i class="fas fa-plus"></i> </button>
                    </div>
                </div>
            </div>


            <div class="row ">


                <?php for ($i = 0; $i < sizeof($json_data['data']); $i++) { ?>
                    <div class="row">

                        <div class="card text-center ml-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text " style="font-size: 18px;"><b><?php echo $json_data['data'][$i]['name'] ?></b></p>
                                <form action="" method="POST">
                                    <img src="<?php echo $json_data['data'][$i]['path'] ?>" width="auto" height="150">
                                    <br>
                                    <button type="button" class="btn btn-danger btn-circle btn-xl " data-toggle="modal" name="ProductEdit" data-target="#Delthesis<?php echo $json_data['data'][$i]['id'] ?>" style="width: 30px;height: 30px;padding: 6px 0px;border-radius: 15px;text-align: center;font-size: 12px;line-height: 1.42857;">
                                        <i class="fas fa-trash-alt"></i> </button>
                                    <button type="button" class="btn btn-warning btn-circle btn-xl " data-toggle="modal" name="ProductDelete" data-target="#Editthesis<?php echo $json_data['data'][$i]['id'] ?>" style="width: 30px;height: 30px;padding: 6px 0px;border-radius: 15px;text-align: center;font-size: 12px;line-height: 1.42857;">
                                        <i class="fas fa-edit"></i> </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>




        </div>

        <div class='content-wrapper p-4'>
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->

            <!-- /.content -->
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