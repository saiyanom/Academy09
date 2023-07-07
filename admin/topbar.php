<!-- Topbar -->

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



    <!-- Sidebar Toggle (Topbar) -->

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

        <i class="fa fa-bars"></i>

    </button>



    <!-- Topbar Navbar -->

    <ul class="navbar-nav ml-auto">



        <!-- Nav Item - User Information -->

        <li class="nav-item no-arrow">

            <a class="nav-link text-dark" href="<?php echo $admin_url; ?>" aria-expanded="false">

                Home

            </a>

        </li>



        <div class="topbar-divider d-none d-sm-block"></div>



        <li class="nav-item dropdown no-arrow">

            

            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['admin']; ?></span>

                <img class="img-profile rounded-circle" src="<?php echo $base_url ?>assets/admin/user.png">

            </a>

            <!-- Dropdown - User Information -->

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">



                <div class="dropdown-divider"></div>

                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> -->

                <a class="dropdown-item" href="<?php echo $admin_url ?>logout.php" >

                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                    Logout

                </a>

            </div>

        </li>



    </ul>



</nav>

<!-- End of Topbar -->