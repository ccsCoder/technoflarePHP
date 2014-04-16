<?php



?>
<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
        <title>Techno Flair Lab: Cloud</title>
        <link rel="shortcut icon" type="../image/x-icon" href="../css/images/favicon.ico" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
        <link href='../css/sm-core-css.css' rel='stylesheet' type='text/css' />
        <link href='../css/sm-clean/sm-clean.css' rel='stylesheet' type='text/css' />
        <script src="../js/jquery-1.8.0.min.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
                <script src="js/modernizr.custom.js"></script>
        <![endif]-->
        <script src="../js/functions.js" type="text/javascript"></script>
        <script src="../js/jquery.smartmenus.js" type="text/javascript"></script>
        <script type="text/javascript">
            var handle = new EventHandlers();
            var bs = new Bootstrap();
            //set parameters
            bs.handler = handle;
           // bs.expandCollapse=true;
            $(document).ready(function(e) {
                bs.init(bs);
            });
        </script>

    </head>
    <body>
        <?php include '../comp/overlay.php'; ?>
        <div id="wrapper">
            <!-- shell -->
            <div class="shell">
                <!-- container -->
                <div class="container">
                    <?php include '../comp/header.php'; ?>
                    <?php include '../comp/nav.php' ?>
                    <div class="main">
                        <section class="cols">
                            <div class="col_inner">
                                <div class="col-cnt-inner">
                                    <h2>Cloud Computing</h2>
                                    <div class="illustrated_text_center" >
                                        <h3 style="text-align: left">Your Data, Your Devices.</h3>
                                        <br/>
                                        <img src="../images/cloudcomputing.png" alt="cloudComputing" style="float:center"/>
                                        <br/>
                                        <h2 style="color:black;background-color: #EFF5FB">TFL Cloud has you backed up !</h2>
                                    </div>
                                    <section class="post">
                                        <h2>So, What does it mean for me ?</h2>
                                        <p>Cloud Computing is the game changer that has spurned the demand for professional who can help companies transition to cloud and adapt the best practices.</p>
                                        <ul>
                                            <li>Comprehend the business benefits and business considerations of cloud computing.</li>
                                            <li>Understand cloud computing from a technical perspective and recognize the various techniques, methods, challenges, and types of clouds.</li>
                                            <li>Recognize the compliance, risk, and regulatory consequences of cloud computing and its financial and strategic impact on an organization.</li>
                                        </ul>
                                    </section>
                                    <div class="illustrated_text_right" >
                                                <h3>Software as a Service (SAAS):</h3>
                                                <img src="../images/saas.png" alt="lost data" style="height:100px;width:188px" />
                                                <p>
                                                   Software as a service (SaaS), sometimes referred to as "on-demand software" or "Application-Service-Providers",
                                                   is a software delivery model in which software and associated data are centrally hosted on the cloud. 
                                                </p>
                                                <p>
                                                    SaaS has become a common delivery model for many business applications.
                                                </p>
                                     </div>
                                    <div class="illustrated_text_left">
                                        <h3>Platform as a Service (PAAS):</h3>
                                        <img src="../images/pass.png" alt="picture_icon" style="width:160px;height:109px"/>
                                        <p>
                                            Platform as a service (PaaS) is a category of cloud computing services that provides a computing platform 
                                            and a solution stack as a service.
                                        </p>
                                        <p>
                                            In this model, the consumer creates the software using tools and/or libraries from the provider. 
                                        </p>
                                    </div>
                                    <div class="illustrated_text_right">
                                        <h3>Infrastructure as a Service (IAAS):</h3>
                                        <img src="../images/iaas.png" alt="happy comptuer" style="width:150px;height:110px" />
                                        <p>
                                            Infrastructure as a Service is a provision model in which an organization outsources 
                                            the equipment used to support operations, including storage, hardware, servers and networking components.
                                        </p>
                                        <p>
                                            The service provider owns the equipment and is responsible for housing, running and maintaining it. The client typically pays on a per-use basis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cl">&nbsp;</div>
                        </section>
                        <section class="testimonial">


                            <p><strong class="quote">“</strong>A chance to blot our mistakes and change failure into winning. It does not take a special time to make a brand new start. It only takes the deep desire to try with all our heart. To live a little better, to always be forgiving. To add a little sunshine in a world for which were living. Never give up in despair Nor think you are through. For theres always a tomorrow, a chance to start new.</p>

                            <p class="author">Founder@Techno Flair Lab !</p>
                        </section>
                    </div>
                    <!-- end of main -->

                    <!-- footer-->
                    <?php include '../comp/footer.php' ?>
                    <!--footer ends-->
                </div>
                <!-- end of container -->	
            </div>
            <!-- end of shell -->	
        </div>
        <!-- end of wrapper -->
    </body>
</html>