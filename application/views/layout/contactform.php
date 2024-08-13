<section id="contact-section" class="py-xl-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mb-md-0 mb-3 p-0">
                <img class="w-100" src="<?php echo base_url('') ?>assets/images/banner/ContactUsFormIllus.png" height="100%" alt="logo">

            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-md-0 mb-3 p-lg-5 p-3">
                <div class="row">
                    <div class="text-content">
                        <div class="title">
                            <!-- <p>Are you stuffing or staffing talent in your enterprise?</p> -->
                            <!-- <span class="small-text text-yellow text-lg-start pb-3">CONTACT</span> -->
                            <h5 class="m-0"><span class="title2">We are in it for the long haul</span></h5>
                            <p>Contact us today to learn more about our permanent recruitment services and how we can help you find the best employees for your company.</p>
                        </div>
                    </div>
                </div>
                <form action="<?php echo base_url('lead/service-contact') ?>" id="myform" method="POST" class="row g-3">
                    <div class="col-md-12">
                        <?php
                        if ($this->session->flashdata('success') != "") {
                        ?>
                            <!-- <div class="alert alert-success"> -->
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo $this->session->flashdata('success') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <!-- </div> -->
                            </div>
                        <?php
                        } elseif ($this->session->flashdata('error') != "") {
                        ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('error') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServer01" class="form-label">Your name*</label>
                        <input type="text" name="name" class="form-control" id="validationServer01" placeholder="Name*" onkeypress="return /[a-z]/i.test(event.key)">
                        <label id="name-error" class="error" for="name"></label>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServer02" class="form-label">Your work email*</label>
                        <input type="email" name="email" class="form-control" id="validationServer02" placeholder="Email*">
                        <label id="email-error" class="error" for="email"></label>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServer03" class="form-label">Your company*</label>
                        <input type="text" name="company" class="form-control" id="validationServer03" placeholder="Company*">
                        <label id="company-error" class="error" for="company"></label>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServer04" class="form-label">Subject*</label>
                        <input type="text" name="subject" class="form-control" id="validationServer04" placeholder="Subject*">
                        <label id="subject-error" class="error" for="subject"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Your message (optional)</label>
                        <textarea class="form-control" name="message" placeholder="Your Message" id="exampleFormControlTextarea1" rows="10"></textarea>
                        <label id="message-error" class="error" for="message"></label>
                    </div>
                    <div class="mb-3">
                        <button class="w-100 btn btn-primary text-uppercase" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style type="text/css">
    .error {
        color: red;
        margin-bottom: 10px;
    }
</style>
<script type="text/javascript">
    $('#myform').validate({
        rules: {
            name: 'required',
            subject: 'required',
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
            },
            message: {
                required: true,
            }
        },
        messages: {
            name: 'This field is required',
            email: 'Enter a valid email',
            message: 'This field is required',
            phone: {
                minlength: 'Number must be at least 10 digit'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>