<?php include('header.php')?>
<section class="section-contact">
    <div class="contact-banner-div">
        <img src=<?php echo base_url('assets/images/contact_banner.jpg');?> alt="contact_banner" class="contact_banner">
        <div class="main-contact-text-wrapper">
            <div class="contactus-text">
                CORPORATE
            </div></br>
            <div class="contactus-text" style="margin-top: 10px;">
                OFFICE
            </div>
        </div>
    </div>
    <div class="container-fluid cus-container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-text mr-bottom-40">
                    The Greenbase Corporate HQ is situated across a sprawling 35 acres of prime land with</br>abundant
                    greenery. An enticing spectacle, the corporate office acts as a prime portal in </br>enriching the
                    customer's multifarious requirements across a wide spectrum.
                </div>
                <div class="contact-text mr-bottom-40">
                    Greenbase - Industrial and Logistics Park</br>
                    Floor 3, Olympia, Technology Steet, Hiranandani Business Park,</br>
                    Hiranandani Gardens, Powai, Mumbai – 400076, MH, India.<br class="forcebr">
                    <span class="call-span"><img src=<?php echo base_url('assets/images/call.svg');?> alt="call"
                            class="call"></span><span><a href="tel:+91 7506805746" class="call-tel-a">7506805746</a></span>
                </div>
                <div class="socio-icon-contact">
                    <span><img src=<?php echo base_url('assets/images/twitter.svg');?> alt="twitter"
                            class="socio-icon"></span>
                    <span><img src=<?php echo base_url('assets/images/LinkedIn_01.svg');?> alt="insta"
                            class="socio-icon"></span>
                    <span><img src=<?php echo base_url('assets/images/fb.svg');?> alt="fb" class="socio-icon"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-text">
                    If you would like to know more about Greenbase, please fill in the form below and </br>
                    we will reach out to you.
                </div>
                <form class="contact-form">
                    <div>
                        <input type="text" placeholder="Name" class="input-width-half" required>
                        <input type="email" placeholder="Email Id" class="input-width-half" required>
                    </div>
                    <div>
                        <input type="tel" placeholder="Phone Number" class="input-width-full" required>
                    </div>
                    <div>
                        <input type="text" placeholder="Comments" class="input-width-full" required>
                    </div>
                    <div>
                        <input type="text" class="input-width-full custom-padding">
                    </div>
                    <div class="button-div-wrapper">
                        <button class="button-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="contact-section-2">
    <div class="container-fluid">
        <div class="row">
            <div class="left-content-wrapper">
                <div class="careers-form-wrapper">
                    <div class="careers-head">
                        CAREERS
                    </div>
                    <div class="form-part-careers">
                        <h5>WORK WITH US</h5>
                        <p>If you are looking for an exciting career with the industry leader,</br>end in your resume to
                        </p>
                        <div>
                            <span><img src=<?php echo base_url('assets/images/mail.svg');?> alt="mail"
                                    class="mail-career"></span><span class="mail"><a href="mailto:careers@greenbase.com" class="mailto">careers@greenbase.com</a></span>
                            or
                            <span class="upload-span"><img src=<?php echo base_url('assets/images/upload.svg');?>
                                    alt="mail" class="upload-career"></span><span class="upload">Upload your CV</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-content-wrapper">
                <img src=<?php echo base_url('assets/images/cv.jpg');?> alt="resume" class="resume-img">
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION 2 MOBILE -->
<section class="contact-section-2-mobile">
    <div class="resume-wrapper">
        <div class="resume-image-wrapper">
            <img src=<?php echo base_url('assets/images/cv.jpg');?> alt="banner" class="cv_mobile">
        </div>
        <div class="form-part-careers">
            <h5>WORK WITH US</h5>
            <p>If you are looking for an exciting career with the industry leader,</br>end in your resume to
            </p>
            <div>
                <span><img src=<?php echo base_url('assets/images/mail.svg');?> alt="mail"
                        class="mail-career"></span><span class="mail"><a href="mailto:careers@greenbase.com" class="mailto">careers@greenbase.com</a></span>
                or
                <span class="upload-span"><img src=<?php echo base_url('assets/images/upload.svg');?>
                        alt="mail" class="upload-career"></span><span class="upload">Upload your CV</span>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php')?>