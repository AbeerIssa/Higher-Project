<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta name="author" content="Eddie Josefino C. Gepulle II, eddie@ict.edu.om" /><meta name="reply-to" content="eddie@ict.edu.om" /><meta name="rating" content="General" /><meta name="revisit-after" content="7 days" /><meta http-equiv="Expires" content="0" /><meta http-equiv="Pragma" content="no-cache" /><meta http-equiv="Cache-Control" content="no-cache" /><title>
	Security Access
</title><link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500" />
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" /><link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" /><link rel="stylesheet" href="assets/css/form-elements.css" /><link rel="stylesheet" href="assets/css/style.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="https://www.ict.edu.om/Resources/img/favicon.ico" /><link href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="../../code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="../../maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" /><link href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous" /></head>
<body>
    <form method="post" action="user_reg.php" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJNjQyNzY4MTE1D2QWAgIDD2QWBgINDw8WAh4EVGV4dAVJPHAgc3R5bGU9J2ZvbnQtZmFtaWx5OiBjb3VyaWVyOyBjb2xvcjogcmVkOyc+W0FjdGl2ZSBJQ1QgZG9tYWluIHVzZXJdPC9wPmRkAhMPZBYCAgEPZBYCZg9kFgICAQ8PFgIeCEltYWdlVXJsBSdHZW5lcmF0ZUNhcHRjaGEuYXNweD82MzY3NTI3ODA5MjM1NzUwNDZkZAIXDw8WAh4HVmlzaWJsZWdkZGT8elMpeqfGEM0UeWU7L5p3bDl9zV1lzIEJvVzh0v/P8g==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="https://www.ict.edu.om/WebResource.axd?d=DLAK6V_NvPAsCsIpfiII7Jqm0a876ntPP-Gg-KrBs6SfC95gqBhrbsU3Vhv3-1XABQZZlPFYiraVmD4MbxnWZHBZ_e1EG-1qYh7CAUJSPWI1&amp;t=636480475623431523" type="text/javascript"></script>


<script src="https://www.ict.edu.om/ScriptResource.axd?d=W6LQIAPmIF1BjnVgFINlq8rw0WyqKMxQFasm_hyuAB31Yvhawxzb-FEbNGVmoRk9CpBT_GrbGW2qkjUXxUvK_anCeBtQtOgYa_njNHCgLus0jZns_oH_DKpSFag5R5jkgqaj7BKaW-ilAsc86SxC8uxKZkpjpC4yGQTEYxEYETQS0zfaK6_6DztfqomKObT10&amp;t=ffffffffad4b7194" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="https://www.ict.edu.om/ScriptResource.axd?d=2zfANcj6lFfAXYaNs1KlBgm1RfFF46VaWHgdPhKzmlgAyQFNi0IldgCya7VtGVBBOLmoPgvtv7ItNmcM4mvzWxjZgkNve3vrcBmLXBLWaU9IPh9iCCEh4KWlPx_x-ha5VCNFEnBiBHhfl_LhbTvZPu2CdAWm8lrvON8fuWiSOdkQ8Tc7Xds218nfBFUePrD-0&amp;t=ffffffffad4b7194" type="text/javascript"></script>
<script src="https://www.ict.edu.om/WebResource.axd?d=taqaLZ4kZMHvmFED5pNQElgdyq043zZWsFfS-WZ_Q2L9ni-z1LQ6MMosDJ7AZp9_GXFvjn6RxTlp3U-XP80d0yvyKVcnPtNRSijAAIN-eVM1&amp;t=636480475623431523" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="32FE2FD1" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAATqSW3Gm0+Ie/SG/7zvkOwtVK7BrRAtEiqu9nGFEI+jB3Y2+Mc6SrnAqio3oCKbxYZroKDC8GVybShI95GftY0xDwnMyGTGudp2v2o7A9mJHbgQcdoVrY2S9sLkcElvZDA=" />
</div>
    <div>
    
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('SM1', 'form1', [], [], [], 90, '');
//]]>
</script>

        
        
        
        

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        
            <div class="col-sm-8 col-sm-offset-2 text"> 
              <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h2> <small>User's Registration </small></h2>
                            
                        </div>
                    </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        		
                                    <p><span id="lblWelcomeICTuser"><p style='font-family: courier; color: red;'></p></span></p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    
			                    	
									<div class="form-group">
											<label class="sr-only" for="form-username">Email</label>
                                        <input name="txtEmail" type="text" id="txtEmail" placeholder="Email.." class="form-username form-control" required="" />
			                        </div>
									
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
                                        <input name="txtPassword" type="password" id="txtPassword" placeholder="Password..." class="form-username form-control" required="" />
			                        </div>
									 <input type="submit" name="btnLogin2" value="submit" id="btnLogin2" tabindex="10" class="btn btn-primary" />
									 <a href=index.php> <input  type="button"   name="btnLogin3" value="Back"   id="btnLogin3" tabindex="5" class="btn btn-danger" /> 
								                                  
                                    
                                </script>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        <style>
                        .social:hover {
                             -webkit-transform: scale(1.2);
                             -moz-transform: scale(1.2);
                             -o-transform: scale(1.2);
                         }
                         .social {
                             -webkit-transform: scale(0.8);
                             /* Browser Variations: */
     
                             -moz-transform: scale(0.8);
                             -o-transform: scale(0.8);
                             -webkit-transition-duration: 0.5s;
                             -moz-transition-duration: 0.5s;
                             -o-transition-duration: 0.5s;
                         }

                        /*
                            Multicoloured Hover Variations
                        */
 
                         #social-fb:hover {
                             color: #3B5998;
                         }
                         #social-tw:hover {
                             color: #4099FF;
                         }
                         #social-ins:hover {
                             color: #993300;
                         }                          
                         #social-yt:hover {
                             color: #d34836;
                         }
                         #social-em:hover {
                             color: #f39c12;
                         }                          
                        </style>
                            <div class="text-center center-block">
                                <a href="https://twitter.com/CollageOman?lang=en/" target=_blank><i id="social-tw" class="fa fa-twitter-square fa-5x social"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100029419883258/" target=_blank><i id="social-fb" class="fa fa-facebook-square fa-5x social"></i></a>
                                <a href="https://www.instagram.com/oces2018_2/" target=_blank><i id="social-ins" class="fa fa-instagram fa-5x social"></i></a>
                                <a href="https://www.youtube.com/user/ibracollege" target=_blank><i id="social-yt" class="fa fa-youtube-square fa-5x social"></i></a>
	                            <a href="contact us3.php"><i id="social-em" class="fa fa-envelope-square fa-5x social"></i></a>
                            </div>


                            <small style="color: #ccc">&copy;2018 Oman Technical Events. .</small>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </div>
    

<script type="text/javascript">
//<![CDATA[
WebForm_AutoFocus('txtUsername');//]]>
</script>
</form>
</body>


</html>
