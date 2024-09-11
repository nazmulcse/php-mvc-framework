<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            ADD GALLERY
        </div>
        <div class="panel-body">
            <form action="<?php echo config::site_url();?>super_admin/save_gallery_info" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" />
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="8" cols="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" />
                </div>
                <div class="form-group">
                    <label for="simage">Slider Image</label>
                    <input type="file" id="simage" name="simage" />
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>