<div class="wrapper row3">
    <div class="rounded">
        <main class="container clear">
            <!-- main body -->
            <!-- ################################################ -->
            <div class="sidebar one_third first">
                <div class="sdb_holder">
                </div>
                <div class="sdb_holder">

                </div>
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div id="content" class="two_third tttwo_third">
                <!-- ################################################################################################ -->
                <div id="comments">
                    <h2>Check Your Result</h2>
                    <form action="<?php echo config::site_url();?>Home/result_checking" method="post">
                        <div class="abs">
                            <label for="roll">Student Roll <span>*</span></label>
                            <input type="text" name="roll" required="1" value="" size="22">
                        </div>
                        <div class="abs">
                            <label for="semister">Semister <span>*</span></label>
                            <select name="semister" required="1">
                                <option value="">Sellect Your Running Semister</option>
                                <option value="1st semister">1st Semister</option>
                                <option value="2nd semister">2nd Semister</option>
                                <option value="3rd semister">3rd Semister</option>
                                <option value="4th semister">4th Semister</option>
                                <option value="5th semister">5th Semister</option>
                                <option value="6th semister">6th Semister</option>
                                <option value="7th semister">7th Semister</option>
                                <option value="8th semister">8th Semister</option>
                            </select>
                        </div>
                        <div class="abs">
                            <label for="session">Session <span>*</span></label>
                            <select name="session">
                                <option value="">Sellect Your Session</option>
                                <option value="2009-2010">2009-2010</option>
                                <option value="2010-2011">2010-2011</option>
                                <option value="2011-2012">2011-2012</option>
                                <option value="2012-2013">2012-2013</option>
                                <option value="2013-2014">2013-2014</option>
                                <option value="2014-2015">2014-2015</option>
                            </select>
                        </div>

                        <div>
                            <input name="submit" type="submit" value="Submit">
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