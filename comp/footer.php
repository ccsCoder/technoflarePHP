<?php
/*
 * footer fragment with Socials.
 */
//    /TFL/technoflarePHP/pages/what_we_do.php
$urlPrefix="";
if ( strstr($_SERVER['REQUEST_URI'],"pages")!==FALSE) {
    //This means we're inside "pages" was found
    $urlPrefix = "../";     //modify
}
?>
<div class="socials">
    <div class="socials-inner">
        <h3>Follow us</h3>
        <ul>
            <li><a href="https://www.facebook.com/technoFlairLabs" target="_blank" class="facebook-ico"><span></span>Facebook</a></li>
            <li><a href="https://twitter.com/technoflairlab" target="_blank" class="twitter-ico"><span></span>Twitter</a></li>
            <!--<li><a href="#" class="rss-feed-ico"><span></span>Rss-feed</a></li>-->
            <!--<li><a href="#" class="myspace-ico"><span></span>myspace</a></li>-->
            <li><a class="john-doe-123-ico"><span></span>E-Mail Us</a></li>
        </ul>
        <div class="cl">&nbsp;</div>
    </div>
</div>
<div id="footer">
    <div class="footer-bottom">
        <nav class="footer-nav">
            <ul>
                <li class="active"><a href=<?php echo $urlPrefix."index" ?>>Home</a></li>
                <li><a href=<?php echo $urlPrefix."research" ?>>e-Lab</a></li>
                <li><a href=<?php echo $urlPrefix."businessIntelligence" ?>>e-Technologies</a></li>
                <li><a href="#">e-Laboratory</a></li>
                <li><a href=<?php echo $urlPrefix."itConsulting" ?>>e-Consulting</a></li>
                <li><a href=<?php echo $urlPrefix."iConnect" ?>>i-Connect</a></li>
                <li><a href=<?php echo $urlPrefix."iConnect" ?>>Contact Us!</a></li>
            </ul>
        </nav>
        <p class="copy">&copy; Copyright 2013 Techno Flair Lab</p>
        <div class="cl">&nbsp;</div>
    </div>
</div>