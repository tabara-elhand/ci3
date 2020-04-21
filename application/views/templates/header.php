<!DOCTYPE html>
<html>
<head>
    <?php $adminlte_url = base_url()."assets/libs/AdminLTE-3.0.2/";?>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $adminlte_url;?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $adminlte_url;?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo $adminlte_url;?>dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $adminlte_url;?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- stylesheet -->
    <link href="<?php echo base_url();?>assets/libs/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/common.css?v=<?php echo filemtime("assets/css/common.css");?>" rel="stylesheet">
    <?php if (isset($css)) :?>
    <?php foreach ($css as $key => $value) :?>
        <?php $filename = "assets/".$value;?>
        <?php if (file_exists($filename))  :?>
            <link rel="stylesheet" href="<?php echo $filename;?>?v=<?php echo filemtime($filename);?>">
        <?php endif;?>
    <?php endforeach;?>
    <?php endif;?>
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo $adminlte_url;?>plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $adminlte_url;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo $adminlte_url;?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/common.js?v=<?php echo filemtime("assets/js/common.js");?>"></script>
    <?php if (isset($js)) :?>
        <?php foreach ($js as $key => $value) :?>
            <?php $filename = "assets/".$value;?>
            <?php if (file_exists($filename))  :?>
                <script type="text/javascript" src="<?php echo $filename;?>?v=<?php echo filemtime($filename);?>"></script>
            <?php endif;?>
        <?php endforeach;?>
    <?php endif;?>
</head>
<body>
<div class="wrapper">
