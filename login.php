<?php include('header.php');?>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body ">
                                    <form method="POST" action="https://www.localhost/academy/api/loginApi.php" enctype="multipart/form-data" id="login_form">
                                        <div class="form-group">
                                            <div class="form-floating mb-3 ">
                                            <input class="form-control" id="inputEmail" type="text" placeholder="username" name="username"/>
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                             <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        </div>
                                        

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" id="login-btn">
                                        </div>
                                        <span class="response-error"></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
   

</body>
</html>