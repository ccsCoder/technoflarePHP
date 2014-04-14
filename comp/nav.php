<?php
/**
 * this file contains Navigation Bar, separately, to be plugged in whereever required.
 */
    
//    /TFL/technoflarePHP/pages/what_we_do.php
$urlPrefix="";
if ( strstr($_SERVER['REQUEST_URI'],"pages")!==FALSE) {
    //This means we're inside "pages" was found
    $urlPrefix = "../";     //modify
}
        

?>
<!-- navigation -->
<div class="nav">
    <!--<a href="#" class="nav-btn" data-flexmenu="flexmenu1"><span style="color:#6FA632">ABOUT</span><span class="arr"></span></a>-->
    <ul id="navigationMenu" class="sm sm-clean">
        <li class="nav-menu_item_neo">
            <a><span>about</span></a>
            <ul >
                <li><a href=<?php echo $urlPrefix."whatWeDo" ?>>What we do?</a></li>
                <li><a href=<?php echo $urlPrefix."howWeDo"?>>How we do?</a></li>
                <li><a href=<?php echo $urlPrefix."whoWeAre"?>>Who we are?</a></li>
            </ul>
        </li>

        <li class="nav-menu_item_neo">
            <a>e-Lab</a>
            <ul>
                <li><a href =<?php echo $urlPrefix."research"?>>Research & Development</a>
                   <!-- <ul>
                        <li><a class="wip">Innovation</a>
                            <ul >
                                <li><a class="wip" >Team-Passionate about ideas</a></li>
                                <li><a class="wip" >Helping to buid business</a></li>
                            </ul>
                        </li>
                        <li><a class="wip" >Solution for you</a></li>
                    </ul>-->
                </li>
                <li><a href =<?php echo $urlPrefix."recovery" ?>>e-Recovery</a>
<!--                   <ul>
                        <li><a class="wip">Recover your Hard Disk data</a></li>
                        <li><a class="wip">Recover your laptop OS</a></li>
                    </ul>-->
                </li>
            </ul>
        </li>

        <li class="nav-menu_item_neo">
            <a>e-Technologies</a>
            <ul>
                <li><a href =<?php echo $urlPrefix."businessIntelligence"?>>Business Intelligence</a>
<!--                    <ul>
                        <li><a class="wip">IBM Cognos</a>
                            <ul>
                                <li><a class="wip">Dashboarding</a></li>
                                <li><a class="wip">Mobility</a></li>
                            </ul>
                        </li>
                        <li><a class="wip">ROAMBI</a></li>
                        <li><a class="wip">Qlik View</a></li>
                        <li><a class="wip">TM1</a></li>
                    </ul>-->
                </li>
                <li><a href =<?php echo $urlPrefix."cloud"?>>Cloud Computing</a></li>
                <li><a href =<?php echo $urlPrefix."infra"?>>Infrastructure Services</a>
<!--                    <ul>
                        <li><a class="wip">Platform Designing</a></li>
                        <li><a class="wip">Virtualization</a></li>
                    </ul>-->
                </li>
            </ul>
        </li>
        <li class="nav-menu_item_neo">
            <a>e-Laboratory</a>
            <ul>
                <li><a class="wip">Order Now!-CBT</a></li>
                <li><a href=<?php echo $urlPrefix."onlineTraining"?>>Online Training</a></li>
                <li><a class="wip">Career Counselling</a></li>
            </ul>
        </li>
        <li class="nav-menu_item_neo">
            <a>e-Consulting</a>
            <ul>
                <li><a href=<?php echo $urlPrefix."businessConsulting"?>>Business Consulting</a></li>
                <li ><a href=<?php echo $urlPrefix."itConsulting"?>>IT Consulting</a>
<!--                    <ul>
                        <li><a class="wip">Manage Support Services</a></li>
                        <li><a class="wip">Staff augmentation</a></li>
                    </ul>-->
                </li>
                <li><a href=<?php echo $urlPrefix."productConsulting"?>>Product Consulting</a></li>
            </ul>
        </li>
        <li class="nav-menu_item_neo">
            <a href=<?php echo $urlPrefix."iConnect"?>>i-Connect</a>
<!--            <ul>
                <li><a class="wip">Worldwide</a></li>
                <li><a class="wip">References</a></li>
            </ul>-->
        </li>
<!--        <li class="nav-menu_item_neo">
            <a class="nav-menu_item_neo_special" href="#">Contact Us!</a>
        </li>-->
    </ul>

</div>
<!-- end of navigation -->
