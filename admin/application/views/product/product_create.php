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
                    <label>Link</label>
                    <input type="text" class="form-control" name="link" placeholder="Link" required>
                  </div>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" required>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" required>
                      <option>---</option>
                      <option value="Kaos">Kaos</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" rows="4" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Picture Home Page</label><br>
                    <input type="file" name="picture_thumb" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Main Picture</label><br>
                    <input type="file" name="picture_main" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                      </span>
                    </div>
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