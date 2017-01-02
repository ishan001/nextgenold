<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Hotel Reservation System :: Next Gen Web developers </title>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <meta name="description" content="Hotel Reservation System "/>

        <meta  name="keywords" content="Hotel Reservation System"/>

        <meta name="author" content="Next Gen web developers"/>

        <?php include("includes/style_links.php"); ?>
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
                                <div class="col-md-4"><h1>Hotel Reservation System</h1></div>
                                <div class="col-md-8">
                                    <ul class="breadcrumb">
                                        <li><a href="<?= URL ?>">Home</a></li>
                                        <li>Hotel Reservation System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Breadcrumb -->

                    <section class="page-wrapper">

                        <!-- Packaging -->
                        <div class="gray-container padding paddv-50">
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="style-gray about-us">Hotel Reservation System</h3>
                                        <p>
                                            Online tools have taken over the way we do business, and have certainly made it efficient from business perspective as well as the client’s.
                                        </p>
                                        <p>
                                            NextGen Hotel Reservation System enables you to convert your prospects, into paying clients, within a matter of seconds – transforming your website to a revenue generator while removing the third party commission factor.
                                        </p>
                                    </div>
                                </div>
                                

                           
                            </div>
                        </div>
                        <!-- /Packaging -->



                    </section>
                    <?php include(REAL_PATH . "includes/footer.php"); ?>
                </div>

            </div>



        </div><!-- /pagewrap -->
        <?php include("includes/scripts.php"); ?>
    </body>
</html>