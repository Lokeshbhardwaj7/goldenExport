<?php
date_default_timezone_set('Asia/Kolkata');

if (time() > strtotime("08/22/2013 10:10AM"))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Quality Policy - Golden Exports</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/touchTouch.css">
 <!--JS-->   
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>
   $(window).load(function() {
     // Initialize the gallery
    $('.thumb-pad5 figure a').touchTouch();
  });
</script>
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
                                    <li class="active"><a href="quality.php">quality</a></li>
                                    <li><a href="contacts.php">contacts</a></li>
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
<div class="container padBot">
    <div class="row">
        <article class="span4">
            <h4>&nbsp;</h4>
            <ul class="list5">
                <li class="clearfix">
                    <div class="extra-wrap">
                        <a href="#">Success Factor</a>
<p style="text-align:justify">At Golden Exports, our philosophy is to maintain the high standards of quality and reliability in all aspects. With our extensive industry expertise, we feel a sense of responsibility to provide exceptional standards of satisfaction to our customers the world across. We are a team of committed professionals who are always prepared and willing to share their expertise and services with our clients.</p>

<p style="text-align:justify">The prime focus of our company is to deliver quality products to our customers. We procure these products from established vendors, quarry owners, farms and processors. Quality is rigorously checked for different parameters and the procurements and tests are conducted under the supervision of experienced associate agriculturists, horticulturists, geologists, engineers, metallurgists, etc. From raw material to final product packing, various attributes are checked under vigilance of expert supervisors.</p>
                    </div>
                </li>
            </ul>
        </article>
        <article class="span8 about-box">
            <h4 style="text-align:left">Quality Policy</h4>


<p><img src="img/quality.jpg" align="left" style="margin-right:20px; margin-bottom:5px;"></p>
<p style="text-align:justify">
We are committed to be positive & aggressive in our attitude towards quality and customer service. We will not allow quality to take second place behind cost or schedule as this is our basic strategy for growth.</p>

<p style="text-align:justify">Our customers demand and warrant a high quality product - it is our responsibility to give them what they want by seeking a better understanding of their requirements/specifications. It is our objective to furnish high quality products, on time, and at the lowest cost. To reach our objectives, we will maintain a constant focus on quality with full dedication, commitment, and teamwork.
Our journey is to implement and maintain our Quality Management System as per ISO Certification standards; fully satisfying our customers' specified requirements through a process of control & continuous improvement. We understand that Quality Management is a long term commitment aimed to strive continuously for achieving more and more customer satisfaction with full operational efficiency, following business/social/environmental ethics including applicable regulatory and statutory requirements and proper utilization of resources.</p>




                        </article>
                    </article>
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
                            <li class="active"><a href="quality.php">quality</a></li>
                            <li><a href="contacts.php">contacts</a></li>
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