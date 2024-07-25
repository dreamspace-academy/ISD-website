<!-- header -->
<?php
$pageTitle = "Contact";
$metaTitle = "Ideal Staging and Design";
$metaDescription = "Transforming properties into stunning, market-ready spaces that captivate potential buyers and drive successful sales.";
?>
<?php include 'components/layout/header.php'; ?>
<?php include 'components/layout/navbar.php'; ?>

<section>
    <div class="sub-header sub-header-1 sub-header-contact fake-position">
        <div class="sub-header-content">
            <h2 class="text-cap white-text">Contact Us</h2>
            <ol class="breadcrumb breadcrumb-arc text-cap">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="active">Contact Us</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Section Sub Header -->
<!-- Section form contact -->
<section class="padding">
    <div class="container">
        <div class="row">
            <div class="contact-warp">
                <div class="col-md-6 ">
                    <div class="left-contact">
                        <h3 class="text-cap"> Send Us a Message</h3>
                        <form class="form-inline form-contact-arc" name="contact" method="post"
                            action="send_form_email.php">
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control" name="yourName" id="yourName"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="email" class="form-control" name="yourEmail" id="yourEmail"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control" name="yourPhone" id="phoneNumber"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="input-content">
                                <div class="form-group form-textarea">
                                    <textarea id="textarea" class="form-control" name="comments" rows="6"
                                        placeholder="Your Messages" required></textarea>
                                </div>
                            </div>
                            <button class="ot-btn btn-main-color btn-long text-cap btn-submit" type="submit">Send
                                Mail</button>
                        </form>
                        <!-- End Form -->
                    </div> <!-- End col -->
                </div>
                <div class="col-md-6 ">
                    <div class="right-contact">
                        <h3 class="text-cap">Contact Info</h3>
                        <p>
                            Get in touch with us today to transform your home. Contact us via phone, email, or through
                            our social media channels
                        </p>
                        <ul class="address">
                            <li>
                                <p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp; 360 Finchdene Square, unit
                                    #13
                                    Scarborough, ON M1X 1C2
                                </p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; 416-508-8975
                            </li>
                            <!-- <li><p><i class="fa fa-fax" aria-hidden="true"></i> &nbsp;(+1) 96 716 6879</p></li> -->
                            <li>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;
                                    theresaidealstaging@gmail.com</p>
                            </li>
                            <li>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp; Mon-Fri 09:00 - 18:00
                                </p>
                            </li>
                        </ul>
                    </div>
                </div> <!-- End col -->
            </div>
        </div>
    </div>
</section>
<!-- End Section -->
<!-- Section Google Map -->
<div class="no-padding ">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.758306187256!2d-79.23558!3d43.8193725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d72dc364d703%3A0xb1dca8501eac13be!2s360%20Finchdene%20Square%20%2313%2C%20Scarborough%2C%20ON%20M1X%201C2%2C%20Canada!5e0!3m2!1sen!2slk!4v1718783032322!5m2!1sen!2slk"
        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
<!-- End Section -->

<!-- footer -->
<?php include 'components/layout/footer.php'; ?>