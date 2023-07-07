<?php

session_start();



require_once '../../api/config.php';



if (!isset($_SESSION['admin'])) {

    header('Location: ' . $admin_url . 'login.php');

    die('check');

}



$stmt = $conn->prepare("SELECT * FROM academy_contact_us ORDER BY created_at DESC");

$stmt->execute();

$result = $stmt->get_result();

$title = "Enroll Now";

?>



<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">



    <title><?php echo $title; ?> </title>



    <link href="<?php echo $base_url ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/admin/css/newdatatable.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/admin/css/custom.css">



</head>



<body id="page-top">



    <!-- Page Wrapper -->

    <div id="wrapper">



        <?php //include '../sidebar.php'

        ?>



        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">



            <!-- Main Content -->

            <div id="content">



                <?php include '../topbar.php';

                ?>



                <!-- Begin Page Content -->

                <div class="container-fluid pt-5">



                    <div id="receipt" style="display: none;"></div>

                    <!-- Page Heading -->

                    <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?> </h1>



                    <div class="card shadow mb-4">

                        <div class="card-body">

                            <div class="table-responsive">
                                <?php
                                $headings = '
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Mobile No.</th>
                                                <th>Email</th>
                                                <th>Background</th>
                                                <th>Courses</th>
                                                <th>Workshop</th>
                                                <th>Date</th>
                                            </tr>
                                            ';
                                ?>
                                <table class="table table-bordered" id="dataTable" width="99%" cellspacing="0">
                                    <thead>
                                        <?php echo $headings; ?>
                                    </thead>

                                    <?php

                                    $counter = 0;

                                    while ($row = $result->fetch_assoc()) {



                                        $counter = ++$counter;

                                        $created_at = date_format(date_create($row['created_at']), "d-m-Y ");



                                        echo '<tr>

                                                <td data-id="' . $row['id'] . '">' . $counter . '</td>

                                                <td>' . $row['name'] . ' </td>

                                                <td>' . $row['mobile'] . ' </td>

                                                <td>' . $row['email'] . ' </td>

                                                <td>' . $row['background'] . ' </td>

                                                <td>' . $row['courses'] . ' </td>

                                                <td>' . $row['workshop'] . ' </td>

                                                <td>' . $created_at . ' </td>

                                            </tr>';

                                    }

                                    ?>

                                    <tfoot>
                                        <?php echo $headings; ?>
                                    </tfoot>
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



    <?php //include '../footer.php';

    ?>



    <script src="<?php echo $base_url ?>assets/js/jquery.min.js?v3.4.1"></script>

    <script src="<?php echo $base_url ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="<?php echo $base_url ?>assets/admin/js/newdatatable.js"></script>



    <script type="text/javascript">

        $('#dataTable').dataTable({

            dom: 'Bfrtip',

            "aLengthMenu": [

                [50, 100, 200],

                [50, 100, 200, "All"]

            ],

            "buttons": [

                'csv', 'excel'

            ],

        });

    </script>



</body>



</html>