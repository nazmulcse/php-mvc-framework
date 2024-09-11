<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">Forms </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ENTER EXAM ROUTINE INFORMATIONS
                </div>
                <div class="panel-body">
                    <form action="<?php echo config::site_url();?>super_admin/save_exam_routine" method="post">
                        <div class="form-group">
                            <label>Semister</label>
                            <select id="semId" class="form-control" name="semister">
                                <option value="">--Select--</option>
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
                        <div class="form-group">
                            <label>Subject</label>
                            <select id="subId" class="form-control" name="subject">
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Day</label>
                            <select class="form-control" name="days">
                                <option value="">--Select--</option>
                                <?php
                                foreach($param2 as $value)
                                {
                                    ?>
                                    <option value="<?php echo $value['day_id'];?>"><?php echo $value['day_name'];?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Start Time</label>
                            <div class='input-group date' id='datetimepicker4'>
                                <input type='text' class="form-control" name="start_time"/>
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>End Time</label>
                            <div class='input-group date' id='datetimepicker3'>
                                <input type='text' class="form-control" name="end_time" />
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <div class='input-group date' data-date-format="dd MM yyyy" id='datetimepicker1'>
                                <input type='text' class="form-control" name="date" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                            </div>
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