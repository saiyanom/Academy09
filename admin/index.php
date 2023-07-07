<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();

require_once '../api/config.php';





if(!isset($_SESSION['admin'])){

   header('Location: '.$admin_url.'login.php');

   die('check');

}



?>

<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>All Leads</title>



    <link href="<?php echo $base_url ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/admin/css/newdatatable.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/admin/css/custom.css">



</head>



<body id="page-top">



    <!-- Page Wrapper -->

    <div id="wrapper">



        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">



            <!-- Main Content -->

            <div id="content">



            <?php include 'topbar.php'; ?>



                <!-- Begin Page Content -->

                <div class="container-fluid mt-2">



                    <div id="receipt" style="display: none;"></div>

                    <!-- Page Heading -->

                    <h1 class="h3  mb-3 text-gray-800">All Leads</h1>



                    <div class="card shadow mb-4">



                        <div class="card-body">

                            <div class="table-responsive">



                                <table class="table table-bordered" id="dataTable" width="99%" cellspacing="0">

                                    <thead>

                                        <tr>

                                            <th>Sr. No</th>

                                            <th>Name</th>

                                            <th>View</th>

                                        </tr>

                                    </thead>



                                    <tbody>

                                        <?php

                                        $i = 0;

                                        // if (in_array('laffair', $admin_list[$_SESSION['admin']]['access'])) {

                                        ?>

                                        <tr>

                                            <td data-id=""><?php echo ++$i; ?></td>

                                            <td>Download Brochure</td>

                                            <td><a href="<?php echo $admin_url . 'forms/download_brochure.php' ?>">View</a> </td>

                                        </tr>



                                        <tr>

                                            <td data-id=""><?php echo ++$i; ?></td>

                                            <td>Enroll Now</td>

                                            <td><a href="<?php echo $admin_url . 'forms/enroll_now.php' ?>">View</a>

                                            </td>

                                        </tr>



                                        <tr>

                                            <td data-id=""><?php echo ++$i; ?></td>

                                            <td>Mobile Sign up</td>

                                            <td><a href="<?php echo $admin_url . 'forms/mobile_sign_up.php' ?>">View</a>

                                            </td>

                                        </tr>



                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>



                </div>

                <!-- /.container-fluid -->



            </div>

            <!-- End of Main Content -->

        </div>

    </div>



    <!-- Bootstrap core JavaScript-->

    <script src="<?php echo $base_url ?>assets/admin/vendor/jquery/jquery.min.js"></script>

    <script src="<?php echo $base_url ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    <!-- Page level plugins -->

    <script src="<?php echo $base_url ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>

    <script src="<?php echo $base_url ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>



    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/sl-1.3.1/datatables.min.js">

    </script>



    <script type="text/javascript">

        $('#dataTable').dataTable({

            // dom: 'Bfrtip',

            "aLengthMenu": [

                [100, 200, 300, -1],

                [100, 200, 300, "All"]

            ],



        });

    </script>



</body>



</html>