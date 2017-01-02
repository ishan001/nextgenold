<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Contact Us :: Next Gen Web developers </title>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <meta name="description" content="About Us "/>

        <meta  name="keywords" content="About Us"/>

        <meta name="author" content="Next Gen web developers"/>

        <?php include("includes/style_links.php"); ?>

        <link rel="stylesheet" href="<?= URL ?>assets/css/fhmm.css">

    </head>
    <body>
        <div id="pagewrap" class="pagewrap">
            <div class="site-container">
                <?php include(REAL_PATH . "includes/header.php"); ?>
                <!-- Wrapper -->
                <div class="wrapper clearfix">

                    <!-- Breadcrumb -->
                    <section class="metainfo">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"><h1>Contact Us</h1></div>
                                <div class="col-md-8">
                                    <ul class="breadcrumb">
                                        <li><a href="<?= URL ?>">Home</a></li>
                                        <li>Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Breadcrumb -->

                    <section class="page-wrapper">

                        <!-- Contact Form -->
                        <div class="contact-forms padding paddv-80 remove-padding paddb">
                            <div class="container border-line-bottom add-padding paddb-80">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>Drop ALINE</h1>
                                        <h2>We would love to hear from you! Please fill out this form and we will be back in touch with you shortly.</h2>

                                        <p>Contact our IT company Wellington for web designing, web development and seo services in New Zealand.</p>
                                        <p>Also feel free to contact us for web hosting in New Zealand, Mobile application development and software development in New Zealand.</p>
                                        <p> We will assist you where ever possible to assist you as an affordable and quality IT companies in New Zealand.</p>

                                    </div>
                                    <div class="col-md-6">
                                        <form method="post" class="form-horizontal contact-form cmxform" role="form" action="">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="alert alert-danger display-hide display-hide" id="messageBox">
                                                        You have some form errors. Please check below.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Your Name *</label>
                                                        <input name="name" type="text" class="form-control input-lg required" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Your Email Address *</label>
                                                        <input name="email" type="text" class="form-control input-lg required email" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>Your Message *</label>
                                                        <textarea name="message" class="form-control required" rows="7" placeholder="" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" id="messageBox">
                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group contact-submit">
                                                    <div class="col-sm-12">
                                                        <button class="read-more" type="submit"><span>Send</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Contact Form -->

                    </section>
                    <?php include(REAL_PATH . "includes/footer.php"); ?>
                </div>

            </div>


        </div><!-- /pagewrap -->
        <?php include("includes/scripts.php"); ?>

        <script type="text/javascript" src="<?= URL ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script> 


        <script >
            $.validator.setDefaults({
		submitHandler: function() {
                    $('#messageBox').removeClass();
                    $('#messageBox').addClass('alert alert-warning');
                    $('#messageBox').html("Sending Your Message......");                    
                    dataString = $(".contact-form").serialize(); 
                     $.ajax({
                       type: "POST",
                       url: "<?= URL ?>contact_submit.php",
                       data: dataString,

                       success: function(data){
                           $('#messageBox').removeClass();
                           $('#messageBox').addClass('alert alert-success');
                           $('#messageBox').html("Your message has been send!. One of our team members will contact you shortly"); 
                       }

                     });
		}
	});

	$().ready(function() {
 
                $('.contact-form').validate();
        });        
        </script>
    </body>
</html>