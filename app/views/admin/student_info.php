<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-info">
                    <?php

                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ENTER STUDENT INFORMATIONS
                </div>
                <div class="panel-body">
                    <form action="<?php echo config::site_url();?>super_admin/save_student" method="post">
                        <div class="form-group">
                            <label for="student_name">Enter Student Name</label>
                            <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Enter name" />
                        </div>
                        <div class="form-group">
                            <label for="student_roll">Enter Student Roll No</label>
                            <input type="text" name="student_roll" class="form-control" id="student_roll" placeholder="Enter roll" />
                        </div>
                        <div class="form-group">
                            <label for="student_regi">Enter Student Registration No</label>
                            <input type="text" name="student_regi" class="form-control" id="student_regi" placeholder="Enter registration" />
                        </div>
                        <div class="form-group">
                            <label>Select Session</label>
                            <select class="form-control" name="session">
                                <?php
                                foreach($param1 as $value)
                                {
                                    ?>
                                    <option value="<?php echo $value['session_id'];?>"><?php echo $value['session_name'];?></option>
                                <?php }?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <hr />
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>