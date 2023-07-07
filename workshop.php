<style>
.response-success3 {
    display: none;
    font-size: 19px;
    font-weight: bold;
    color: green;
}

.error {
    color: red;
}
</style>


<div class="modal fade ao9_frm" id="workshop-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span></button>
                <h1 class="sm_hd text-center">Workshop</h1>
            </div>


            <div class="modal-body">


                <form id="contactForm_3" action="api/contactApi.php" method="post">


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
                    <?php
                        $option_data[] = "Creative Thinking";
                        $option_data[] = "The Art of Consumer Profiling";
                        $option_data[] = "Defining Brand DNA thru Brand Keys";
                        $option_data[] = "Design Basics";
                        $option_data[] = "Website Coding";
                        $option_data[] = "Content Creation Series";
                        $option_data[] = "Unleashing your creativity thru Painting";
                    ?>

                    <div class="form-group">
                        <select class="form-control" name="workshop" id="workshop_options">
                            <option value="" selected>Select Workshop</option>
                            
                            <option value="Creative Thinking">Creative Thinking</option>
                            <option value="The Art of Consumer Profiling">The Art of Consumer Profiling</option>
                            <option value="Defining Brand DNA thru Brand Keys">Defining Brand DNA thru Brand Keys</option>
                            <option value="Design Basics">Design Basics</option>
                            <option value="Website Coding">Website Coding</option>
                            <option value="Content Creation Series">Content Creation Series</option>
                            <option value="Unleashing your creativity thru Painting">Unleashing your creativity thru Painting</option>
                        </select>
                    </div>

                    <div class="form-group fcov_btn"><button class="btn_sm_tp" type="submit" id="submit_cn_btn_3">
                            <span class="button_1">SIGN ME UP</span><span class="button_2">Enroll Now</span></button>
                    </div>

                    <span class="response-error3"></span>

                </form>

                <div class="response-success3">
                    Thank you for your interest. We will get back to you shortly.
                </div>
            </div>
        </div>
    </div>
</div>