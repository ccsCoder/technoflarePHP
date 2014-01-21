<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//    /TFL/technoflarePHP/pages/what_we_do.php
$urlPrefix="";
if ( strstr($_SERVER['REQUEST_URI'],"pages")!==FALSE) {
    //This means we're inside "pages" was found
    $urlPrefix = "../";     //modify
}
?>
<html>
<body>

<form action="#" method="post">

           <div style="padding:30px">
                <div style="text-align: left">
                    Name: <input id="queryFormName" type="text" maxlength="50" placeholder="What are you called?" />
                 </div>

                 <div>
                    Email: <input id="queryEmailID" type="email" maxlength="50" placeholder="Your Email ID." />
                 </div>
               <div>
                    How did you know about TFL: <input id="referenceFrom" type="email" maxlength=100 placeholder="Reference from onLine or other source" />
                </div>
                 
                <div style="float:center;margin-top: 10px;">
                    Query: 
                </div>
                 <div>
                    <textarea id="queryText"></textarea>
                 </div>
                
                 
            <input type="submit">
        </div>
</form>

</body>
</html>