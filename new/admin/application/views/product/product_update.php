<div class="main-content">
  <div class="container-fluid">
    <form action="<?php echo base_url(); ?>product/product_update_process" method="POST" class="forms-sample" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h6 class="font-weight-bold">Update Product</h6>
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $product['name'] ?>" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" value="<?php echo $product['price'] ?>" placeholder="Price" required>
                  </div>
                  <div class="form-group">
                    <label>Discount Price</label>
                    <input type="number" class="form-control" name="discount_price" value="<?php echo $product['discount_price'] ?>" placeholder="Discount Price">
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" name="category[]" multiple required>
                      <?php foreach ($category_list as $key => $value): ?>
                        <option value="<?php echo $value['id'] ?>" <?php echo (strpos($product['category'], $value['id']) !== false ? 'selected' : '') ?>><?php echo $value['name'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea name="description" rows="4" class="form-control" required><?php echo $product['description'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="full_description" rows="6" class="form-control" required><?php echo $product['full_description'] ?></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <!-- <div class="form-group">
                    <label>Main Picture</label><br>
                    <?php
                      if($product['main_picture'] == ""){
                        echo "<b>No Image</b>";
                      }
                      else{
                        echo "<image width='300px' class='mb-2' src='".base_url()."file/image/".$product['main_picture']."'>";
                      }
                    ?>
                    <input type="file" name="main_picture" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                      </span>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label>Promotion</label>
                    <input type="text" class="form-control" name="promotion" value="<?php echo $product['promotion'] ?>" placeholder="Promotion" required>
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

    
    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">Update Product Color</h6>
            <div class="row clearfix">
              <div class="col-md-4">
                <form action="<?php echo base_url(); ?>product/product_color_new_process" method="POST" class="forms-sample">
                  <input type="hidden" name="id_product" value="<?php echo $product['id'] ?>">
                  <div class="form-group">
                    <label>Color</label>
                    <input type="text" id="hue-demo" class="form-control demo" data-control="hue" name="color_code" value="#ff6161">
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
              <div class="col-md-auto" style="border-right: 1px solid #eaeaea"></div>
              <div class="col-md">
                <table class="table data_table">
                  <thead>
                    <tr class="bg-info">
                      <th class="text-white font-weight-bold">Is Main</th>
                      <th class="text-white font-weight-bold">Code</th>
                      <th class="text-white font-weight-bold">Color</th>
                      <th class="text-white font-weight-bold"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($product_color_list as $key => $value): ?>
                    <tr>
                      <td>
                        <a href="<?= base_url() ?>product/product_color_main_update_process/<?php echo $value['id'] ?>/<?php echo $product['id'] ?>" class="btn btn-sm <?= $value['ismain'] == 1 ? 'btn-success' : 'btn-danger' ?>"><?= $value['ismain'] == 1 ? 'Yes' : 'No' ?></a>
                      </td>
                      <td><?= $value['color_code'] ?></td>
                      <td>
                        <div style="border-radius: 3px; width: 1rem; height: 1rem; background-color: <?= $value['color_code'] ?>">
                        </div>
                      </td>
                      <td>
                        <a href="<?php echo base_url() ?>product/product_color_delete_process/<?php echo $value['id'] ?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are You Sure?')"><i class="fas fa-trash m-0"></i></a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">Update Product Picture</h6>
            <div class="row clearfix">
              <div class="col-md-4">
                <form action="<?php echo base_url(); ?>product/product_picture_new_process" method="POST" class="forms-sample" enctype="multipart/form-data">
                  <input type="hidden" name="id_product" value="<?php echo $product['id'] ?>">
                  <div class="form-group">
                    <label>Picture</label>
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
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
              <!-- <div class="col-md-1" style="border-right: 1px solid #eaeaea"></div> -->
              <div class="col-md-7">
                <div class="overflow-auto">
                  <table class="table data_table">
                    <thead>
                      <tr class="bg-info">
                        <th class="text-white font-weight-bold">Is Main</th>
                        <th class="text-white font-weight-bold">Picture</th>
                        <th class="text-white font-weight-bold">SVG</th>
                        <th class="text-white font-weight-bold"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($product_picture_list as $key => $value): ?>
                      <tr>
                        <td>
                          <a href="<?= base_url() ?>product/product_picture_main_update_process/<?php echo $value['id'] ?>/<?php echo $product['id'] ?>" class="btn btn-sm <?= $value['ismain'] == 1 ? 'btn-success' : 'btn-danger' ?>"><?= $value['ismain'] == 1 ? 'Yes' : 'No' ?></a>
                        </td>
                        <td>
                          <?php
                            if($value['picture'] == ""){
                              echo "<b>No Image</b>";
                            }
                            else{
                              echo "<image width='300px' class='mb-2' src='".base_url()."file/image/".$value['picture']."'>";
                            }
                          ?>  
                        </td>
                        <td><span class="text-break"><?= $value['svg'] ?></span></td>
                        <td>
                          <a href="<?php echo base_url() ?>product/product_picture_delete_process/<?php echo $value['id'] ?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are You Sure?')"><i class="fas fa-trash m-0"></i></a>
                        </td>
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">Product Size</h6>
            <div class="row clearfix">
              <div class="col-md">
                <div class="overflow-auto">
                  <table class="table data_table">
                    <thead>
                      <tr class="bg-info">
                        <th class="text-white font-weight-bold">Name (S, M, L)</th>
                        <th class="text-white font-weight-bold">Size (Panjang Badan)</th>
                        <th class="text-white font-weight-bold">SVG</th>
                        <th class="text-white font-weight-bold"></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
  </div>
</div>