<style>
.response-success {
    display: none;
    font-size: 19px;
    font-weight: bold;
    color: green;
}

.error {
    color: red;
}
</style>

<form id="contactForm" action="api/contactApi.php" method="post">


    <div class="form-group"><input name="name" type="text" class="form-control" placeholder="Your Name*"></div>
    <div class="form-group"><input name="mobile" type="text" class="form-control" placeholder="Mobile Number*"></div>
    <div class="form-group"><input name="email" type="text" class="form-control" placeholder="Email Address*"></div>
    <!-- <div class="form-group"><input type="text" class="form-control" placeholder="When Is It Convenient For You To Contact?*"></div> -->
    <div class="form-group">
        <select class="form-control" name="background">
            <option value="" selected>--Select Background* --</option>
            <option value="Student">Student</option>
            <option value="Fresher">Fresher</option>
            <option value="Employeed">Employeed</option>
        </select>
    </div>

    <div class="form-group fcov_btn"><button class="btn_sm_tp" type="submit" id="submit_cn_btn">
        <span class="button_1">SIGN ME UP</span><span class="button_2">Enroll Now</span></button>
    </div>

    <span class="response-error "></span>

</form>

<div class="response-success">
    Thank you for your interest. We will get back to you shortly.
</div>