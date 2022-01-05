<div class="main-content">
  <div class="container-fluid">
    <form action="<?php echo base_url(); ?>product/product_create_process" method="POST" class="forms-sample" enctype="multipart/form-data">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h6 class="font-weight-bold">Update Product</h6>
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" required>
                  </div>
                  <div class="form-group">
                    <label>Discount Price</label>
                    <input type="number" class="form-control" name="discount_price" placeholder="Price">
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" name="category[]" multiple required>
                      <?php foreach ($category_list as $key => $value): ?>
                        <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea name="description" rows="4" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="full_description" rows="6" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Main Picture</label><br>
                    <input type="file" name="main_picture" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>SVG Path</label>
                    <textarea name="svg" rows="4" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <div class="mt-2 row">
                <div class="col-12">
                  <a href="<?php echo base_url() ?>product/product_list" class="btn btn-secondary">Cancel</a>
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