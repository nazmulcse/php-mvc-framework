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
                    ENTER TIME INFORMATIONS
                </div>
                <div class="panel-body">
                    <form action="<?php echo config::site_url();?>super_admin/save_time" method="post">
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="text" class="form-control" name="time" id="time" placeholder="time" />
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