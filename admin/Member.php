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
                                <a href='/admin/Member.php' class='nav-link  active'>
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
            <?php include_once 'App/Member/Add.php' ?>
            <?php include_once 'App/Member/Edit.php' ?>
            <?php include_once 'App/Member/Delete.php' ?>

            <div class='row'>
                <div class='col-12'>
                    <div class='card'>
                        <div class='card-header'>
                            
                                <span class="navbar-brand mb-0 h1">รายการ | สมาชิก</span>
                            
                            <div class='card-tools'>
                                <form action="db/query.php" method="post">
                                    <div class='input-group input-group-sm' style='width: 150px;'>
                                        <input type='text' name='table_search' class='form-control float-right' onkeyup="" id="search" placeholder='Search'>
                                        <div class='input-group-append'>
                                            <button type='button' style="cursor:default" name='Search' class='btn btn-default'><i class='fas fa-search'></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class='card-body table-responsive p-0' style='height: 100%;'>
                            <table class='table table-head-fixed text-nowrap'>
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>ชื่อ</th>
                                        <th>สกุล</th>
                                        <th>วันเกิด</th>
                                        <th>เพศ</th>
                                        <th>Phone</th>
                                        <th>อาชีพ</th>
                                        <th>เมือง</th>
                                        <th></th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < sizeof($Memberdata['data']); $i++) { ?>

                                        <tr>
                                            <td><?php echo $i + 1 ?></td>
                                            <td><?php echo $Memberdata['data'][$i]['firstname'] ?></td>
                                            <td><?php echo $Memberdata['data'][$i]['lastname'] ?></td>
                                            <td><?php echo $Memberdata['data'][$i]['date_of_birth'] ?></td>
                                            <td><?php echo $Memberdata['data'][$i]['gender'] ?></td>
                                            <td><?php echo $Memberdata['data'][$i]['phone'] ?></td>
                                            <td><?php echo $Memberdata['data'][$i]['career'] ?></td>
                                            <td><?php echo $Memberdata['data'][$i]['province'] ?></td>
                                            <td><button type="button" class="btn btn-danger btn-circle btn-xl " data-toggle="modal" name="ProductEdit" data-target="#Delthesis<?php echo $Memberdata['data'][$i]['id'] ?>" style="width: 30px;height: 30px;padding: 6px 0px;border-radius: 15px;text-align: center;font-size: 12px;line-height: 1.42857;">
                                                    <i class="fas fa-trash-alt"></i> </button>
                                            </td>
                                            <td><button type="button" class="btn btn-warning btn-circle btn-xl " data-toggle="modal" name="ProductDelete" data-target="#Editthesis<?php echo $Memberdata['data'][$i]['id'] ?>" style="width: 30px;height: 30px;padding: 6px 0px;border-radius: 15px;text-align: center;font-size: 12px;line-height: 1.42857;">
                                                    <i class="fas fa-edit"></i> </button></td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
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