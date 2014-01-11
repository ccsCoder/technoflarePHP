<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
        <title>Techno Flair Lab - Research</title>
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
                                    <div class="title_img"><img src="../images/rnd.png" alt="" /></div>
                                        <div class="col-cnt-inner">
                                                <h2>Research and Development</h2>
                                                <p>Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.
                                                Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.
                                                Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.</p><br>
                                                
                                                <div class="illustrated_text_right">
                                                        <h3>Innovation</h3>
                                                        <img src="../images/beakers_r.png" alt="android_image"/>
                                                        <p>
                                                           Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.
                                                           Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.
                                                           Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.  
                                                            
                                                        </p>
                                                    </div>
                                                    
                                                    
                                                    <div class="illustrated_text_left">
                                                        <h3>Solutions for You</h3>
                                                        <img src="../images/tick_r.png" alt="Customer_sols" />
                                                        <p>Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.
                                                            Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.
                                                            Lorem Ipsum Dolor sit amet.Lorem Ipsum Dolor sit amet.</p>
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