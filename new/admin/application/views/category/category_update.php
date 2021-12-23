<div class="main-content">
  <div class="container-fluid">
    <form action="<?php echo base_url(); ?>category/category_update_process" method="POST" class="forms-sample">
      <input type="hidden" name="id" value="<?php echo $category_list['id'] ?>" required>
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row clearfix">
                <div class="col-md-6">
                  <h6 class="font-weight-bold">Create New Category</h6>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $category_list['name'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status_delete" required>
                      <option value="1" <?php echo ($category_list['status_delete'] == 1 ? 'selected' : '') ?>>Active</option>
                      <option value="0" <?php echo ($category_list['status_delete'] == 0 ? 'selected' : '') ?>>Inactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="mt-2 row">
                <div class="col-12">
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