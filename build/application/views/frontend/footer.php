<section class="base">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-icons-wrapper">
                    <div class="contact-icons-div">
                        <img src=<?php echo base_url('assets/images/call-modal.svg');?> alt="contact-icons"
                            class="contact-icons" id="call-modal">
                    </div>
                    <div class="contact-icons-div">
                        <img src=<?php echo base_url('assets/images/mail-modal.svg');?> alt="contact-icons"
                            class="contact-icons" id="mail-modal">
                    </div>
                    <div class="contact-icons-div">
                        <img id="contact-modal" src=<?php echo base_url('assets/images/contact-modal.svg');?>
                            alt="contact-icons" class="contact-icons" id="contact-modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footersection">
    <div class="container-fluid cus-padding-footer">
        <div class="row">
            <div class="col-md-5">
                <div class="footer-left-content-wrapper">
                    <div class="brand-name">
                        Greenbase - Industrial and Logistics Park
                    </div>
                    <div class="brand-address">
                        Floor 3, Olympia, Technology Steet, Hiranandani Business Park,</br>Hiranandani Gardens, Powai,
                        Mumbai – 400076, MH, India
                    </div>
                    <div class="footer-icons-brand">
                        <a href="http://">
                            <img src=<?php echo base_url('assets/images/twitterwhite.svg')?> alt="twitterwhite">
                        </a>
                        <a href="http://">
                            <img src=<?php echo base_url('assets/images/linkedin_white.svg')?> alt="linkedin_white">
                        </a>
                        <a href="http://">
                            <img src=<?php echo base_url('assets/images/fbwhite.svg')?> alt="fbwhite">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 position-footer-right-main">
                <div class="row position-footer-right">
                    <div class="col-md-12 footer-nav-wrapper">
                        <ul>
                            <li><a href="aboutus">ABOUT US</a></li>
                            <li><a href="whyus">WHY US</a></li>
                            <li><a href="#">OUR LOCATION</a></li>
                            <li><a href="clients">OUR CLIENTS</a></li>
                            <li><a href="news">NEWS</a></li>
                            <li><a href="gallery">GALLERY</a></li>
                            <li><a href="blogs">BLOGS</a></li>
                            <li><a href="contact">CONTACT US</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 copyryt">
                        © 2020 - All rights reserved
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<div class="contactmodal" id="modalContact">
    <div class="contactmodalwrapper">
        <div class="contactmodalheader row">
            <div class="col-md-9 heading">
                GET IN TOUCH WITH US
            </div>
            <div class="col-md-3 cancel">
                <img id="cancel-modal" src=<?php echo base_url('assets/images/cancel_red.svg');?> alt="cancel"
                    class="modal-cancel-img">
            </div>
        </div>
        <div class="contactmodalbody">
            <form class="contact-form">
                <div>
                    <input type="text" placeholder="Name" class="input-width-half contact-input-width-half" required>
                    <input type="email" placeholder="Email Id" class="input-width-half contact-input-width-half"
                        required>
                </div>
                <div>
                    <input type="text" placeholder="+91" disabled class="input-width-half phone-code"
                        required>
                    <input type="tel" placeholder="Phone Number" class="input-width-half phone-input"
                        required>
                </div>
                <div>
                    <input type="text" placeholder="Comments" class="input-width-full contact-input-width-full"
                        required>
                </div>
                <div>
                    <input type="text" class="input-width-full custom-padding contact-input-width-full">
                </div>
                <div class="button-div-wrapper">
                    <button class="button-submit floatnormal">Submit</button>
                </div>
            </form>
        </div>
        <div class="contactmodalfooter"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src=<?php echo base_url('assets/js/bootstrap.min.js');?>></script>
<script src=<?php echo base_url('assets/js/custom.js');?>></script>
</body>

</html>