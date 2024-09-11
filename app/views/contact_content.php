<div class="wrapper row3">
    <div class="rounded">
        <main class="container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="sidebar one_third first">
                <div class="sdb_holder">

                </div>
                <div class="sdb_holder">

                </div>
                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div id="content" class="two_third tttwo_third">
                <!-- ################################################################################################ -->
                <div id="comments">
                    <h2>Contact with us</h2>
                    <form action="<?php echo config::site_url();?>Home/save_contact_info" method="post">
                        <div class="abs">
                            <label for="name">Name</label>
                            <input type="text" name="name" required="1" size="22">
                        </div>
                        <div class="abs">
                            <label for="email">Class Roll</label>
                            <input type="text" name="roll"  required="1" size="22">
                        </div>
                        <div class="abs">
                            <label for="semister">Semister</label>
                            <input type="text" name="semister" required="1" size="22">
                        </div>
                        <div class="abs">
                            <label for="mail">Mail</label>
                            <input type="text" name="mail"  required="1" size="22">
                        </div>
                        <div class="block clear">
                            <label for="comment">Your Comment</label>
                            <textarea name="comment" cols="25" rows="7"></textarea>
                        </div>
                        <div>
                            <input name="submit" type="submit" value="Submit Form">
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