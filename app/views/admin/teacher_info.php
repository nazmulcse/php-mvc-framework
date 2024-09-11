<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            ADD TEACHER'S INFORMATION
        </div>
        <div class="panel-body">
            <form action="<?php echo config::site_url();?>super_admin/save_teacher_info" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" />
                </div>
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter designation" />
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" />
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Mobile" />
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="gender" value="Mail" />
                        Mail
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="gender" value="Femail" />
                        Femail
                    </label>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" />
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>