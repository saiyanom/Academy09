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


<div class="modal fade ao9_frm" id="enroll-now" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span></button>
                <h1 class="sm_hd text-center">Enroll Now</h1>
            </div>


            <div class="modal-body">


                <!-- <form id="contactForm" > -->
                <form id="contactForm_2" action="api/contactApi.php" method="post">


                    <div class="form-group"><input name="name" type="text" class="form-control"
                            placeholder="Your Name*"></div>
                    <div class="form-group"><input name="mobile" type="text" class="form-control"
                            placeholder="Mobile Number*"></div>
                    <div class="form-group"><input name="email" type="text" class="form-control"
                            placeholder="Email Address*"></div>
                    <!-- <div class="form-group"><input type="text" class="form-control" placeholder="When Is It Convenient For You To Contact?*"></div> -->
                    <div class="form-group">
                        <select class="form-control" name="background">
                            <option value="" selected>Select Background*</option>
                            <option value="Student">Student</option>
                            <option value="Fresher">Fresher</option>
                            <option value="Employeed">Employeed</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="courses">
                            <option  value="" selected>Select Course</option>
                            <option value="Introduction To Digital Marketing">Introduction To Digital Marketing</option>
                            <option value="Website Creation">Website Creation</option>
                            <option value="Content Marketing">Content Marketing</option>
                            <option value="Performance Marketing">Performance Marketing </option>
                            <option value="SEARCH ENGINE OPTIMIZATION AND WEB LISTENING">SEARCH ENGINE OPTIMIZATION AND WEB LISTENING</option>
                            <!--<option value="SOCIAL MEDIA MARKETING (SMM)">SOCIAL MEDIA MARKETING (SMM)</option>-->
                            <!--<option value="New Age MEDIA Marketing">New Age MEDIA Marketing</option>-->
                            <option value="PERFORMANCE MARKETING">PERFORMANCE MARKETING</option>
                            <option value="PROJECT MANAGEMENT">PROJECT MANAGEMENT</option>
                            <option value="TECHVERSTING">TECHVERSTING</option>
                            <option value="MARKETING 101">MARKETING 101</option>
                           <!-- <option value="From Product to Positioning">From Product to Positioning</option>-->
                        </select>
                    </div>

                    <div class="form-group fcov_btn"><button class="btn_sm_tp" type="submit" id="submit_cn_btn_2">
                            <span class="button_1">SIGN ME UP</span><span class="button_2">Enroll Now</span></button>
                    </div>

                    <span class="response-error2 "></span>

                </form>

                <div class="response-success2">
                    Thank you for your interest. We will get back to you shortly.
                </div>
            </div>
        </div>
    </div>
</div>

<script src="api/validationA09.js"></script>