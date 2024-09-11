<div class="wrapper row3">
<div class="rounded">
    <main class="container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div id="comments">
            <h2>Student Registration Form</h2>
            <form action="<?php echo config::site_url();?>Home/save_student_info" method="post" enctype="multipart/form-data">
                <div class="one_third first">
                    <label for="name">Student Name <span>*</span></label>
                    <input type="text" name="name" required="1" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="roll">Username <span>*</span></label>
                    <input type="text" name="username" required="1" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="roll">Student Roll <span>*</span></label>
                    <input type="text" name="roll" required="1" value="" size="22">
                </div>
                <div class="one_third first">
                    <label for="roll">Password <span>*</span></label>
                    <input type="password" name="password" required="1" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="semister">Semister <span>*</span></label>
                    <select name="semister" required="1">
                        <option value="">---Select Semister--</option>
                        <option value="1">1st Semister</option>
                        <option value="2">2nd Semister</option>
                        <option value="3">3rd Semister</option>
                        <option value="4">4th Semister</option>
                        <option value="5">5th Semister</option>
                        <option value="6">6th Semister</option>
                        <option value="7">7th Semister</option>
                        <option value="8">8th Semister</option>
                    </select>
                </div>
                <div class="one_third">
                    <label for="session">Session <span>*</span></label>
                    <select name="session">
                        <option value="">Sellect Your Session</option>
                        <option value="2009">2009-2010</option>
                        <option value="2010">2010-2011</option>
                        <option value="2011">2011-2012</option>
                        <option value="2012">2012-2013</option>
                        <option value="2013">2013-2014</option>
                        <option value="2014">2014-2015</option>
                    </select>
                </div>
                <div class="one_third first">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" required="1" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" required="1" value="" size="22">
                </div>
                <div class="one_third">
                    <label for="image">Upload Your Image</label>
                    <input type="file" id="image" name="image">
                </div>
                <div class="block clear">
                    <label for="comment">Student Address</label>
                    <textarea style="max-width: 50%;" name="address" id="comment" cols="15" rows="5"></textarea>
                </div>
                <div>
                    <input name="submit" type="submit" value="Submit">
                </div>
            </form>
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
</div>