<div class="wrapper row3">
    <div class="rounded">
        <main class="container clear">
            <!-- main body -->
            <div class="sidebar one_quarter first">
                <h6>Exam Routine For All Semister</h6>
                <nav class="sdb_holder">
                    <ul>
                        <li>
                            <ul>
                                <?php
                                foreach($param1 as $value)
                                {
                                    ?>
                                    <li id="semister"><a class="exrtnId" id="<?php echo $value['id'];?>" href="#"><?php echo $value['display_name'];?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div id="content" class="three_quarter">
                <!-- ################################################################################################ -->
                <div id="exId" class="scrollable">
                    <h1>Please Click the Semister Name To See Your Exam Routine</h1>
                </div>
                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
</div>