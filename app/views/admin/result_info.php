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
                    ENTER RESULT INFORMATIONS
                </div>
                <div class="panel-body">
                    <form action="<?php echo config::site_url();?>super_admin/save_result" method="post">
                        <div class="form-group">
                            <label>Slect Roll</label>
                            <select class="form-control" name="roll">
                                <?php
                                foreach($param1 as $value)
                                {
                                ?>
                                <option value="<?php echo $value['student_id'];?>"><?php echo $value['student_roll'];?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Semister</label>
                            <select id="semId" class="form-control" name="semister">
                                <option value="">--Select--</option>
                                <?php
                                foreach($param2 as $value)
                                {
                                    ?>
                                    <option value="<?php echo $value['semister_id'];?>"><?php echo $value['semister_name'];?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Subject</label>
                            <select id="subId" class="form-control" name="subject">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gpa">Enter GPA</label>
                            <input type="text" class="form-control" name="gpa" id="gpa" placeholder="gpa" />
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