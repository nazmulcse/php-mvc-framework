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
                    ENTER ROUTINE INFORMATIONS
                </div>
                <div class="panel-body">
                    <form action="<?php echo config::site_url();?>super_admin/save_routine" method="post">
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
                            <label>Time</label>
                            <select class="form-control" name="time">
                                <?php
                                foreach($param1 as $value)
                                {
                                    ?>
                                    <option value="<?php echo $value['id'];?>"><?php echo $value['time'];?></option>
                                <?php }?>
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
                            <label>Teacher</label>
                            <select class="form-control" name="teacher">
                                <option value="">--Select--</option>
                                <?php
                                foreach($param3 as $value)
                                {
                                    ?>
                                    <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
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