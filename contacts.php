<?php
date_default_timezone_set('Asia/Kolkata');

if (time() > strtotime("08/22/2013 10:10AM"))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="font/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/forms.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
<![endif]-->
<!--[if lt IE 9]>
  <link rel="stylesheet" href="css/ie.css">
  <link rel="stylesheet" href="css/docs.css">
  <script src="js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<div class="global">
<header class="margBot1 margBrand">
    <div class="bg">
        <div class="container">
            <div class="row">
                <article class="span12">
                    <div class="navbar navbar_ clearfix marg">
                        <div class="navbar-inner">      
                            <div class="clearfix">
                                <div class="nav-collapse nav-collapse_">
                                    <ul class="nav sf-menu clearfix">
                                    <li><a href="index.php">home</a></li>
                                    <li><a href="company.php">company</a></li>
                                    <li><a href="products.php">products</a></li>
                                    <li><a href="quality.php">quality</a></li>
                                    <li class="active"><a href="contacts.php">contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""></a></h1>                
                </article>
            </div>
        </div>
    </div>
</header>
<!--content-->
<div class="container">
    <div class="row">
        <article class="span12">
            <h5>Contact Us</h5>
            <figure class="map">
                <iframe src="map.php"></iframe>
            </figure>
        </article>
    </div>
</div>
<div class="container">
    <div class="row">
        <article class="span4">
            <div class="info">
                <h5>Address</h5>
                <p><strong> Silver Arc-223,</strong><br> Plot No.57,Sector No.8,<br>
Gandhidham - Kutch<br>Gujarat - India-370201</p>
                <p><span>Telephone:</span>+91 2836-234347</p>
                <p><span>FAX:</span>+91 2836-234347</p>
                <p>E-mail:<a href="#">info@goldenexports.co.in</a></p>
            </div>
            <div class="info">
                <p><strong>Registered Office </strong><br>PO Box No.239, Plot No.468/A,<br>Sector-7, Gandhidham,<br>Kutch-Gujarat-India-370201</p>
            </div>
            
        </article>
        <article class="span8 form-box">
            <div>
                <h5>Contact Form</h5>
                <form id="contact-form">
                    <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
                    <fieldset>
                            <div class="form-div-1">
                                <label class="name">
                                <input type="text" value="Name*:">
                                <br>
                                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-2">
                                <label class="email">
                                <input type="email" value="Email*:">
                                <br>
                                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-3">
                                <label class="phone">
                                <input type="tel" value="Phone*:">
                                <br>
                                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <label class="message">
                            <textarea>Message*:</textarea>
                            <br>
                            <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
                            </label>
                        <div class="btns">
                            <a href="#" data-type="submit" class="btn btn-primary btn2">Submit</a>
                            <p>*required fields</p>
                        </div>
                    </fieldset>
                </form>
            </div>
        </article>
    </div>
</div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <article class="span12">
                <div class="row">
                    <nav class="span6">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><a href="company.php">company</a></li>
                            <li><a href="products.php">products</a></li>
                            <li><a href="quality.php">quality</a></li>
                            <li class="active"><a href="contacts.php">contacts</a></li>
                        </ul>
                    </nav>
                    <div class="span3 offset3">
                        <p>goldenexports.co.in &copy; 2013</p>
                    </div>
                </div>
            </article>
            <!-- {%FOOTER_LINK} -->
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

<?php } else { ?>
<HTML>
<HEAD><TITLE>Site Under Construction</TITLE>
  <link href="favicon.png" rel="shortcut icon" />
</HEAD>
<BODY BGCOLOR=#FFFFFF>
<CENTER><BR><BR><BR><BR>
<TABLE WIDTH=400 CELLPADDING=0 CELLSPACING=0 BORDER=0>
<TR>
<TD>
<BR><BR><BR>
<IMG SRC=img/cons.gif BORDER=0 ALIGN=right><FONT FACE=ARIAL SIZE=-1><B>This site is under construction.<BR>
Please visit again to check the status.</B> 
<FONT><I>Thanks!</I></FONT>
<BR><BR>
<IMG SRC=img/under.gif BORDER=0 WIDTH=442 HEIGHT=15>
</TD>
</TR>
</TABLE>
</CENTER>
</BODY>
</HTML> 

<?php } ?>