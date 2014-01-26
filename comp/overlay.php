<?php
    
?>

<div class="overlay">
   <div class="box-content-holder" id="mailer">
       
            <div class="box-heading">
                What's your Query?
                <span class="close">X</span>
            </div>
       <div style="padding:30px">
            <div style="text-align: left">

                 <div>
                    Name: <input id="queryFormName" type="text" maxlength="50" placeholder="What are you called?" />
                 </div>

                 <div>
                    Email: <input id="queryEmailID" type="email" maxlength="50" placeholder="Your Email ID." />
                 </div>
                <div style="text-align:left;margin-top: 10px">
                    How did you know about TFL: <input id="referenceFrom" type="email" maxlength=100 placeholder="Reference from onLine or other source" />
                </div>
                <div>
                    Query: 
                </div>
                 <div>
                    <textarea id="queryText"></textarea>
                 </div>
                
                 <div style="float:right;margin-top: 10px;">
                     <div id='submitQuery' class="css_btn_class">Submit</div>
                 </div>
            </div>

        </div>
   </div>
   
   <div class="box-content-holder" id="workInProgress">
       
            <div class="box-heading">
                We're still working on this... <br/>
                <span class="close">X</span>
            </div>
       <div style="padding:30px">
            <div style="text-align: center">
                <div style="margin:0 auto">
                    <img src="images/work_in_progress2.png" alt="Work in Progress!" /> 
                </div>
            </div>

        </div>
   </div>
</div>