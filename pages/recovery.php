<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
        <title>Techno Flair Lab - E_Recovery</title>
        <link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
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
            bs.handler=handle;
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
                                            <h2>E-Recovery</h2>
                                    </div>
                                    <div class="illustrated_text_center" >
                                        <h3 style="text-align: left">Causes of Data Loss.</h3>
                                        <br/>
                                        <img src="../images/datalossCause.jpg" alt="dataloss" style="float:center"/>
                                        <br/>
                                        <h2 style="color:red;background-color: #EFF5FB">Hardware Failure is the Main Culprit!</h2>
                                    </div>
                                    <div class="illustrated_text_right" >
                                                <h3>We can help !</h3>
                                                <img src="../images/backup_restore.png" alt="lost data" />
                                                <p>
                                                   In most cases, that data does not get destroyed. It just becomes Inaccessible.
                                                   Its like you have the buildings, but no roads to reach them.
                                                </p>
                                                <p>
                                                    We, use a variety of tools and our expertise to get you your data. Pronto!
                                                </p>
                                     </div>
                                    <div class="illustrated_text_left">
                                        <h3>Never loose your Pictures.</h3>
                                        <img src="../images/pic_conv.png" alt="picture_icon" />
                                        <p>
                                            According to a recent survey, Pictures are the most cherished data that people have.
                                            And Yes, There is a good chance we can recover those picnic snapshots you accidentally deleted.
                                        </p>
                                    </div>
                                    <div class="illustrated_text_right">
                                        <h3>Be Proactive!</h3>
                                        <img src="../images/happy_comp.png" alt="happy comptuer" />
                                        <p>
                                            Why wait for a disaster to strike? Our e-Labs can help you keep your Hard Disk and Computer running smoothly so that 
                                            you face minimal risk of crashes, corrupt Operating systems. 
                                        </p>
                                        <p>
                                            A happy system is after all, Like Clockwork !
                                        </p>
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