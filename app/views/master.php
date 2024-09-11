<?php
if(isset($_SESSION['id']))
  $id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Department Of CSE | SBPGC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?php echo config::site_url();?>public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
    <div id="topbar" class="clear">
        <!-- ################################################################################################ -->
        <nav>
            <ul>
                <?php
                if(isset($id)) {
                    ?>
                    <li><a href="<?php echo config::site_url();?>Home/logout">Logout</a></li>
                <?php
                }
                else
                {
                ?>
                    <li><a href="<?php echo config::site_url();?>Home/login">Student Login</a></li>
                    <li><a href="<?php echo config::site_url();?>Home/register">Register</a></li>

                <?php } ?>
            </ul>
        </nav>
        <!-- ################################################################################################ -->
    </div>
</div>
<div class="wrapper row1">
    <header id="header" class="clear">
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
            <img style="float:left;" src="<?php echo config::site_url();?>public/images/nicon.png">


        </div>
        <div class="fl_right">
            <form class="clear" method="post" action="#">
                <fieldset>
                    <legend>Search:</legend>
                    <input type="text" value="" placeholder="Search Here">
                    <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
                </fieldset>
            </form>
        </div>
        <div class="social">
            <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
            <ul class="faico clear">
                <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

        </div>
        <!-- ################################################################################################ -->
    </header>
</div>
<div class="wrapper row2">
    <div class="rounded">
        <nav id="mainav" class="clear">
            <!-- ################################################################################################ -->
            <ul class="clear">
                <li class="active"><a href="<?php echo config::site_url();?>">Home</a></li>
                <li><a class="drop" href="#">Information</a>
                    <ul>
                        <li><a href="<?php echo config::site_url();?>Home/get_students_info">Student Info</a></li>
                        <li><a href="<?php echo config::site_url();?>Home/TeacherInfo">Teacher Info</a></li>
                    </ul>
                </li>
                <li><a class="drop" href="#">academic</a>
                    <ul>
                        <li><a href="<?php echo config::site_url();?>Home/academic">Class Schedule</a></li>
                        <li><a href="<?php echo config::site_url();?>Home/ExamSchedule">Exam Schedule</a></li>
                        <li><a href="<?php echo config::site_url();?>Home/GradingSystem">Grading System</a></li>
                        <li><a href="<?php echo config::site_url();?>Home/CourseDetails">Course Details & Tution Fees</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo config::site_url();?>Home/results">Results</a></li>
                <li><a href="http://localhost/library/">Library</a></li>
                <li><a href="<?php echo config::site_url();?>Home/gallery">Gallery</a></li>
                <li><a href="<?php echo config::site_url();?>Home/contact">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php echo $pars1;?>
<div class="wrapper row4">
    <div class="rounded">
        <footer id="footer" class="clear">
            <!-- ################################################################################################ -->
            <div class="one_third first">
                <figure class="center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.3509004898228!2d90.39956163253227!3d23.722340674483608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xea4fd5281b6e9b65!2sBurhanuddin+College!5e0!3m2!1sen!2sbd!4v1422993577121" width="400" height="300" frameborder="0" style="border:0"></iframe>
                    <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
                </figure>
            </div>
            <div class="address">
                <address>
                    Shaikh Burhanuddin Post Graduate College<br>
                    House No: 62<br>
                    Road Name: Nazimuddin Road<br>
                    Bangshal,Dhaka<br>
                    Postcode:1100<br>
                    <br>
                    <i class="fa fa-phone pright-10"></i> +88 01920815304<br>
                    <i class="fa fa-envelope-o pright-10"></i> <a href="#">nazmul@nazmul.com</a>
                </address>
            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
</div>
<div class="wrapper row5">
    <div id="copyright" class="clear">
        <!-- ################################################################################################ -->
        <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">www.sbpgc_cse.edu.bd</a></p>
        <p class="fl_right">Powered by <a target="_blank" href="#" title="">NAZMUL | JOY | ARIF</a></p>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- JAVASCRIPTS -->
<script src="<?php echo config::site_url();?>public/layout/scripts/jquery.min.js"></script>
<script src="<?php echo config::site_url();?>public/layout/scripts/jquery.fitvids.min.js"></script>
<script src="<?php echo config::site_url();?>public/layout/scripts/jquery.mobilemenu.js"></script>
<script src="<?php echo config::site_url();?>public/layout/scripts/tabslet/jquery.tabslet.min.js"></script>
<script src="<?php echo config::site_url();?>public/layout/scripts/nivo-lightbox/nivo-lightbox.min.js"></script>
<script type="text/javascript">
    $(document).on('click' , '.rtnId' , function(){
        var idAttr = $(this).attr('id');
       // return false; // to prevent the default action of the link also prevents bubbling
        $('#rotId').html('Loading...');
      if(idAttr){
          $.ajax({
              type: "POST",
              url: "<?php echo config::site_url();?>Home/get_routine/"+idAttr,
              cache: false
          }).done(function( html ) {
              $("#rotId").html(html);
          });
      }
    });
    $(document).on('click' , '.exrtnId' , function(){
        var idAttr = $(this).attr('id');
        // return false; // to prevent the default action of the link also prevents bubbling
        $('#exId').html('Loading...');
        if(idAttr){
            $.ajax({
                type: "POST",
                url: "<?php echo config::site_url();?>Home/get_exam_routine/"+idAttr,
                cache: false
            }).done(function( html ) {
                $("#exId").html(html);
            });
        }
    });
</script>
</body>
</html>