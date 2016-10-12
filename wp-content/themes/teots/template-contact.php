<?php
/**
 * Template Name: Contact Template
 *
 * @package teots
 */

require 'inc/class.phpmailer.php';
require 'inc/class.smtp.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //print_r($_POST);

    //Do form validation
    if(!empty($_POST['contactName'])) {
        if(!empty($_POST['email']) && is_email($_POST['email'])) {
            if(!empty($_POST['message'])) {

                $msg = '<h1>Website enquiry:</h1><table><tr><td>Name:</td><td>';
                $msg .= $_POST['contactName'];
                $msg .= '</td></tr><tr><td>Email address:</td><td>' . $_POST['email'];
                $msg .= '</td></tr><tr><td>Message:</td><td>' . $_POST['message'];

                //Create a new PHPMailer instance
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->Host = 'smtp.mandrillapp.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'chris@drawandcode.com';
                $mail->Password = '8d162f7a-c9ca-4f7c-968d-fd7e0389c66c';


                //Set who the message is to be sent from
                $mail->SetFrom($_POST['email'], $_POST['contactName']);
                $mail->AddAddress('andrew@drawandcode.com', 'Test');


                $mail->Subject = 'TEOTS - Enquiry';
                //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
                $mail->MsgHTML($msg);

                //Send the message, check for errors

                if(!$mail->Send()) {

                    //$mailFeedback = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please call us on 0151 601 9479</div>';
                    $mailFeedback .= '<div class="feedbackError">' . $mail->ErrorInfo . '</div>';
                    //echo '<div class="alert alert-danger">Sorry, there was an error sending your message. Please call us on 0151 601 9479</div>';
                } else {
                    //header("Location: http://dev.to2c:81/contact/");
                    $mailFeedback = '<div class="alert alert-success">Thank you, we have received your message and will be back in touch as soon as possible.</div>';
                    //echo '<div class="alert alert-success" style="margin-bottom:0"><div class="container">Thank you, we have received your message and will be back in touch as soon as possible.</div></div>';
                }

            } else {
                $mailFeedback = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please do not send an empty message</div>';
            }
        } else {
            $mailFeedback = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please enter a valid email address</div>';
        }
    } else {
        $mailFeedback = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please enter your full name</div>';
    }

} else {
    $mailFeedback = '';
}

if (isset($_GET['success'])) {
    $success = $_GET['success'];

    if($success === 1) {
        $mailFeedback = '<div class="alert alert-success" style="margin-bottom:0">Thank you, we have received your message and will be back in touch as soon as possible.</div>';
    }

    echo $_GET['link'];
}

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="contactHead">
                <div class="container">
                    <h1>Contact Us</h1>
                    <p>If you have any questions or want to find out more about our campaign please don't hesitate to contact us! Simply fill in the form below and we'll get back to you asap!</p>
                </div>
            </div>

            <div class="contactForm">
                <div class="container">
                    <div class="col-sm-6">
                        <div class="formSection">

                            <h2>Contact Form</h2>
                            <p>If you wish to contact us please fill in the form below and we'll get back to you as soon as possible!</p>

                            <form class="form form-horizontal" role="form" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                                <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="contactName" placeholder="First & Last Name" value="">
                                </div>
                                <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                </div>
                                <div class="form-group">
                                        <textarea class="form-control" placeholder="Enter your message here ..." rows="4" name="message"></textarea>
                                </div>
                                <div class="form-group">
                                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary teotsButton large">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <! Will be used to display an alert to the user>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="otherContact">
                            <h2>Social Media</h2>
                            <p>If you would rather contact us via social media please follow us on twitter or join our campaign group on facebook.</p>
                            <div class="sm">
                                <i class="fa fa-twitter" aria-hidden="true"></i> <a href="https://twitter.com/totaleclipse96">@totaleclipse96</a>
                            </div>
                            <div class="sm">
                                <i class="fa fa-facebook" aria-hidden="true"></i> <a href="https://www.facebook.com/totaleclipseofthesunpage/?fref=ts">Total Eclipse of the S&n</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();