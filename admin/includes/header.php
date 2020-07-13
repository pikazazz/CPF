<?php include_once 'db/query.php';
include_once 'App/Product/readApi.php';
include_once 'App/Member/readApi.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>COMSCI-THESIS | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css" />
    <!-- Google Font: Prompt -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
</head>
<?php if (isset($_SESSION['statusOk'])) { ?>
    <div class="d-none Loginsuccess"></div>
<?php unset($_SESSION['statusOk']);
} ?>


<?php if (isset($_SESSION['DelProductOk'])) { ?>
    <div class="d-none DelProductOk"></div>
<?php unset($_SESSION['DelProductOk']);
} ?>

<?php if (isset($_SESSION['EditProductOk'])) { ?>
    <div class="d-none EditProductOk"></div>
<?php unset($_SESSION['EditProductOk']);
} ?>

<?php if (isset($_SESSION['AddProductOk'])) { ?>
    <div class="d-none AddProductOk"></div>
<?php unset($_SESSION['AddProductOk']);
} ?>



<body class="hold-transition sidebar-mini layout-fixed">