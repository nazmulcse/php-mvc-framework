<div class="wrapper row3">
<div class="rounded">
    <main class="container clear">
        <!-- main body -->
        <div id="content" class="modified">
            <!-- ################################################################################################ -->
            <h1><?php echo $param1['title'];?></h1>
            <img class="imgl borderedbox" src="<?php echo $param1['image'];?>" alt="">
            <p><?php echo $param1['description'];?> </p>
            <div id="comments">
                <h2>Write A Comment</h2>
                <form action="<?php echo config::site_url();?>Home/save_comments_info/<?php echo $param1['id'];?>" method="post">
                    <div class="one_third first">
                        <label for="name">Name <span>*</span></label>
                        <input type="text" name="name" id="name" value="" size="22">
                    </div>
                    <div class="one_third">
                        <label for="email">Mail <span>*</span></label>
                        <input type="text" name="email" id="email" value="" size="22">
                    </div>
                    <div class="block clear">
                        <label for="comment">Your Comment</label>
                        <textarea name="comment" id="comment" cols="10" rows="10" style="max-width: 50%;"></textarea>
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