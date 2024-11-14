<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Login -Archeleogy Web Site</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/niceadmin/img/favicon.png" rel="icon') ?>">
    <link href="<?php echo base_url('assets/niceadmin/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/niceadmin/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/niceadmin/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/niceadmin/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/niceadmin/vendor/quill/quill.snow.cs') ?>s" rel="stylesheet">
    <link href="<?php echo base_url('assets/niceadmin/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/niceadmin/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/niceadmin/vendor/simple-datatables/style.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/niceadmin/css/style.css') ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="h-screen w-screen" style="
        background-image: url(<?= base_url('images/background/bg1.jpg') ?>);
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: -10;
        top: 0;
        left: 0;">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="flex items-center justify-start rtl:justify-end ">

                                <a href="#" class="d-flex align-items-center width:200px py-2">
                                    <img src="<?php echo base_url('images/archeleogy-logo.png') ?>" alt="">
                                    <div class="flex items-center justify-start rtl:justify-end">

                                </a>
                            </div><!-- End Logo -->
                            <!-- <?php
                            echo $this->postal->get();
                            ?> -->
                            <?php echo form_open('', array('class' => 'form-horizontal')); ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3 needs-validation">
                                        <div class="pt-4 pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Нэвтрэх эрхээр нэвтэрнэ үү!
                                            </h5>
                                            <p class="text-center small">Хэрэглэгчийн нэврэх нэр нууц үг оруулах</p>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Нэвтрэх нэр', 'identity'); ?>
                                            <?php echo form_error('identity'); ?>
                                            <?php echo form_input('identity', '', 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Нууц үг', 'password'); ?>
                                            <?php echo form_error('password'); ?>
                                            <?php echo form_password('password', '', 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <?php echo form_checkbox('remember', '1', FALSE); ?> Сануулах
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_submit('submit', 'Нэвтрэх', 'class="btn btn-primary w-100" '); ?>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/niceadmin/vendor/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/niceadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/niceadmin/vendor/chart.js/chart.umd.js') ?>"></script>
    <script src="<?php echo base_url('assets/niceadmin/vendor/echarts/echarts.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/niceadmin/vendor/quill/quill.js') ?>"></script>
    <script src="<?php echo base_url('assets/niceadmin/vendor/simple-datatables/simple-datatables.js') ?>"></script>
    <script src="<?php echo base_url('assets/niceadmin/vendor/tinymce/tinymce.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/niceadmin/vendor/php-email-form/validate.js') ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/niceadmin/js/main.js') ?>"></script>

</body>

</html>