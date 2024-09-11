<div class="wrapper row3">
    <div class="rounded">
        <main class="container clear">
            <!-- main body -->
            <div class="sidebar one_third first">
                <div class="sdb_holder">
                    <h6>College Info</h6>
                    <address>
                        Sk Borhanuddin College<br>
                        62,Nazimuddin Road,Dhaka-1100<br>
                        Dhaka<br>
                        1100<br>
                        <br>
                        Tel: 02-98457<br>
                        Email: <a href="#">contact@domain.com</a>
                    </address>
                </div>
                <div class="sdb_holder">

                </div>
                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div id="content" class="two_third">
                <!-- ################################################################################################ -->
                <div id="comments">
                    <h2>Student Login Area</h2>
                    <p style="color: red;">
                        <?php
                          if(isset($_SESSION['message']))
                            echo $_SESSION['message'];
                          session_unset();
                        ?>
                    </p>
                    <form action="<?php echo config::site_url();?>Home/check_login" method="post">
                        <div class="one_third first">
                            <label for="name">Username <span>*</span></label>
                            <input type="text" required="required" name="username" id="name" value="" size="22">
                        </div>
                        <div class="one_third">
                            <label for="email">Password <span>*</span></label>
                            <input type="password" required="required" name="password" id="email" value="" size="22">
                        </div>
                        <div class="block clear">
                            <input name="submit" type="submit" value="Login">
                        </div>
                    </form>
                </div>
                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
</div>