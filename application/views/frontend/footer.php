<footer class="base">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-icons-wrapper">
                    <div class="contact-icons-div">
                        <img src=<?php echo base_url('assets/images/call-modal.svg');?> alt="contact-icons" class="contact-icons" id="call-modal">
                    </div>
                    <div class="contact-icons-div">
                        <img src=<?php echo base_url('assets/images/mail-modal.svg');?> alt="contact-icons" class="contact-icons" id="mail-modal">
                    </div>
                    <div class="contact-icons-div" >
                        <img id="contact-modal" src=<?php echo base_url('assets/images/contact-modal.svg');?> alt="contact-icons" class="contact-icons" id="contact-modal">
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
                <img id="cancel-modal" src=<?php echo base_url('assets/images/cancel_red.svg');?> alt="cancel" class="modal-cancel-img">
            </div>
        </div>
        <div class="contactmodalbody">
            <form class="contact-form">
                <div>
                    <input type="text" placeholder="Name" class="input-width-half contact-input-width-half" required>
                    <input type="email" placeholder="Email Id" class="input-width-half contact-input-width-half" required>
                </div>
                <div>
                    <input type="tel" placeholder="Phone Number" class="input-width-full contact-input-width-full" required>
                </div>
                <div>
                    <input type="text" placeholder="Comments" class="input-width-full contact-input-width-full" required>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src=<?php echo base_url('assets/js/bootstrap.min.js');?>></script>
<script src=<?php echo base_url('assets/js/custom.js');?>></script>
</body>

</html>