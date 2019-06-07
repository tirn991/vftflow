<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/roboto.css">
        <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/fixedHeader.bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/c3.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
        
        <!-- Datepicker -->
    <link href='<?php echo base_url(); ?>assets/datepicker/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src='<?php echo base_url(); ?>assets/datepicker/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
        
        <style type="text/css">

            .form-group input[type="checkbox"] {
                display: none;
            }

            .form-group input[type="checkbox"] + .btn-group > label span {
                width: 20px;
            }

            .form-group input[type="checkbox"] + .btn-group > label span:first-child {
                display: none;
            }
            .form-group input[type="checkbox"] + .btn-group > label span:last-child {
                display: inline-block;   
            }

            .form-group .newlac input[type="text"] + .btn-group > label span:last-child {
                display: inline-block;   
            }

            .form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
                display: inline-block;
            }
            .form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
                display: none;   
            }

            #radioBtn .notActive{
                color: #3276b1;
                background-color: #fff;
            }
        
        </style>
        <title><?php echo $page_title; ?></title>
    </head>
    <body class="cm-no-transition cm-2-navbar">