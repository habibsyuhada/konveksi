<div class="main-content">
  <div class="container-fluid">
    <form action="<?php echo base_url(); ?>category/category_update_process/<?php echo $category_list['id'] ?>" method="POST" class="forms-sample" enctype="multipart/form-data">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h6 class="font-weight-bold">Update Category</h6>
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" name="category" placeholder="Category" value="<?php echo $category_list['category'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" required>
                      <option value="1" <?php echo ($category_list['status'] == 1 ? "selected" : "") ?>>Active</option>
                      <option value="0" <?php echo ($category_list['status'] == 0 ? "selected" : "") ?>>Inactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="mt-2 row">
                <div class="col-12">
                  <a href="<?php echo base_url() ?>category/category_list" class="btn btn-secondary">Cancel</a>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>