<div class="wrapper">
    <div id="slider">
        <div id="slide-wrapper" class="rounded clear slid">
            <!-- ################################################################################################ -->
            <figure id="slide-1"><a class="view" href="#"><img src="public/images/demo/slider/1.png" alt=""></a>
            </figure>
            <figure id="slide-2"><a class="view" href="#"><img src="public/images/demo/slider/2.png" alt=""></a>
                <figcaption>
                    <p class="right"><a href="<?php echo config::site_url();?>Home/about_page">Continue Reading &raquo;</a></p>
                </figcaption>
            </figure>
            <figure id="slide-3"><a class="view" href="#"><img src="public/images/demo/slider/3.png" alt=""></a>
                <figcaption>
                    <p class="right"><a href="#">Continue Reading &raquo;</a></p>
                </figcaption>
            </figure>
            <figure id="slide-4"><a class="view" href="#"><img src="public/images/demo/slider/4.png" alt=""></a>
                <figcaption>
                    <p class="right"><a href="<?php echo config::site_url();?>Home/TeacherInfo">Continue Reading &raquo;</a></p>
                </figcaption>
            </figure>
            <figure id="slide-5"><a class="view" href="#"><img src="public/images/demo/slider/5.png" alt=""></a>
                <figcaption>
                    <p class="right"><a href="#">Continue Reading &raquo;</a></p>
                </figcaption>
            </figure>
            <!-- ################################################################################################ -->
            <ul id="slide-tabs">
                <li><a href="#slide-1"></a></li>
                <li><a href="#slide-2">All About The University</a></li>
                <li><a href="#slide-3">Why You Should Study With Us</a></li>
                <li><a href="#slide-4">Our Highly Experience Teacher's</a></li>
                <li><a href="#slide-5">Latest University News &amp; Events</a></li>
            </ul>
            <!-- ################################################################################################ -->
        </div>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <div class="rounded">
        <main class="container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="group btmspace-30">
                <!-- Left Column -->
                <div class="one_quarter first">
                    <!-- ################################################################################################ -->
                    <ul class="nospace">
                        <li class="btmspace-15"><a href="<?php echo config::site_url();?>Home/get_students_info"><em class="heading">Student's Profile</em> <img class="borderedbox" src="public/images/demo/profile.jpg" alt=""></a></li>
                        <li class="btmspace-15"><a href="<?php echo config::site_url();?>Home/TeacherInfo"><em class="heading">Teacher List</em> <img class="borderedbox" src="public/images/demo/teacher.jpg" alt=""></a></li>
                    </ul>
                    <!-- ################################################################################################ -->
                </div>
                <!-- / Left Column -->
                <!-- Middle Column -->
                <div class="one_half">
                    <h2>Latest News &amp; Events</h2>
                    <ul class="nospace listing">
                        <?php
                           foreach($param1 as $value)
                           {
                        ?>
                        <li class="clear">
                            <div class="imgl borderedbox"><img src="<?php echo $value['image'];?>" alt=""></div>
                            <p class="nospace btmspace-15"><a href="<?php echo config::site_url();?>Home/details_news/<?php echo $value['id'];?>"><?php echo $value['title'];?></a></p>
                            <p><?php echo $value['short_description'];?></p>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <!-- / Middle Column -->
                <!-- Right Column -->
                <div class="one_quarter sidebar">
                    <!-- ################################################################################################ -->
                    <div class="sdb_holder">
                        <h6>Virtual Tour</h6>
                        <div class="mediacontainer"><img src="public/images/demo/video.jpg" alt="">
                            <p><a href="<?php echo config::site_url();?>Home/gallery">View More Tour Picture Here</a></p>
                        </div>
                    </div>
                    <div class="sdb_holder">
                        <h6>Usefull Links</h6>
                        <ul class="nospace quickinfo">
                            <li class="clear"><a href="#">SBPGC</a></li>
                            <li class="clear"><a href="#"> National University</a></li>
                            <li class="clear"><a href="#"> Education board results</a></li>
                            <li class="clear"><a href="#"> Ministry of education</a></li>
                            <li class="clear"><a href="http://www.dip.gov.bd/"> Passport</a></li>
                            <li class="clear"><a href="#"> Order A Prospectus</a></li>
                            <li class="clear"><a href="#"> Order A Prospectus</a></li>
                        </ul>
                    </div>
                    <!-- ################################################################################################ -->
                </div>
                <!-- / Right Column -->
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->

            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
</div>
