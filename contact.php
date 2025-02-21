<?php
require_once("include/initialize.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $dateSent = date('Y-m-d H:i:s');

    $sql = "INSERT INTO tblmessages (Name, Email, Phone, Message, DateSent) VALUES ('$name', '$email', '$phone', '$message', '$dateSent')";
    $mydb->setQuery($sql);
    $mydb->executeQuery();

    // Show popup message
    echo "<script>alert('Your message has been sent successfully!'); window.location.href='index.php?q=contact';</script>";
    exit();
}
?>

<!-- Start Contact Us Section -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                    <h2>Contact With Us</h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" method="POST" novalidate>
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" name="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" name="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="600ms">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>