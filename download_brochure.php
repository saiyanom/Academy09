<style>
.response-success2 {
    display: none;
    font-size: 19px;
    font-weight: bold;
    color: green;
}

.error {
    color: red;
}
</style>


<div class="modal fade ao9_frm" id="download-brochure" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span></button>
                <h1 class="sm_hd text-center">Download Brochure</h1>
            </div>


            <div class="modal-body">


                <!-- <form id="contactForm" > -->
                <form id="download_brochure" action="api/downloadBrochureApi.php" method="post">


                    <div class="form-group"><input name="name" type="text" class="form-control"
                            placeholder="Your Name*"></div>
                    <div class="form-group"><input name="mobile" type="text" class="form-control"
                            placeholder="Mobile Number*"></div>
                    <div class="form-group"><input name="email" type="text" class="form-control"
                            placeholder="Email Address*"></div>
                    <!-- <div class="form-group"><input type="text" class="form-control" placeholder="When Is It Convenient For You To Contact?*"></div> -->
                  
                    <script src="https://www.google.com/recaptcha/api.js?render=6LeKqQYjAAAAAKrzeYFF9LIxIHfxTWXRAarg9j6M"></script>

                    <div class="form-group fcov_btn">
                        <button class="btn_sm_tp" type="submit" id="btn_download_brochure">Download Brochure</button>
                    </div>

                    <span class="response-error-brochure "></span>

                </form>

                <div class="response-brochure-success" style="display: none;">
                    Thank you for downloading brochure.
                </div>
            </div>
        </div>
    </div>
</div>

<script src="api/validationA09.js?ver=2"></script>