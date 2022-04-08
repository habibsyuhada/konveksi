<div class="main-content">
  <div class="container-fluid">
    <form action="<?php echo base_url(); ?>product/product_update_process/<?php echo $product_list['link'] ?>" method="POST" class="forms-sample" enctype="multipart/form-data">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h6 class="font-weight-bold">Update Product</h6>
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $product_list['link'] ?>" placeholder="Link" required>
                  </div>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $product_list['name'] ?>" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" value="<?php echo $product_list['price'] ?>" placeholder="Price" required>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" required>
                      <option>---</option>
                      <?php foreach($category_list as $key => $value): ?>
                      <option value="<?php echo $value['category'] ?>" <?php echo ($product_list['category'] == $value['category'] ? "selected" : "") ?>><?php echo $value['category'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" rows="4" class="form-control" required><?php echo $product_list['description'] ?></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Picture Home Page</label><br>
                    <?php
                      if($product_list['picture_thumb'] == ""){
                        echo "<b>No Image</b>";
                      }
                      else{
                        echo "<image width='300px' class='mb-2' src='".base_url()."file/image/".$product_list['picture_thumb']."'>";
                      }
                    ?>
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
                    <?php
                      if($product_list['picture_main'] == ""){
                        echo "<b>No Image</b>";
                      }
                      else{
                        echo "<image width='300px' class='mb-2' src='".base_url()."file/image/".$product_list['picture_main']."'>";
                      }
                    ?>
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

    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">Color of Product</h6>
            <form action="<?php echo base_url(); ?>product/color_create_process/<?php echo $product_list['link'] ?>" method="POST" class="forms-sample" enctype="multipart/form-data">
              <input type="hidden" name="id_product" value="<?php echo $product_list['id'] ?>">
              <input type="hidden" name="link" value="<?php echo $product_list['link'] ?>">
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Color</label>
                    <input type="text" class="form-control" name="color" placeholder="Color" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image_color" class="file-upload-default">
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
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
            <br>
            <div class="responsive">
              <table class="table text-center">
                <thead>
                  <tr class="bg-info">
                    <th class="text-white font-weight-bold">Color</th>
                    <th class="text-white font-weight-bold">Image</th>
                    <th class="text-white font-weight-bold"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($color_list as $key => $value): ?>
                  <tr>
                    <td><?php echo $value['color'] ?></td>
                    <td><image width='150px' class='mb-2' src='<?php echo base_url() ?>file/image/color/<?php echo $value['image'] ?>'></td>
                    <td><a href="<?php echo base_url() ?>product/color_delete_process/<?php echo $value['id'] ?>/<?php echo $product_list['link'] ?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this data?')"><i class="fas fa-trash m-0"></i></a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">Size of Product</h6>
            <form action="<?php echo base_url(); ?>product/size_create_process/<?php echo $product_list['link'] ?>" method="POST" class="forms-sample" enctype="multipart/form-data">
              <input type="hidden" name="id_product" value="<?php echo $product_list['id'] ?>">
              <input type="hidden" name="link" value="<?php echo $product_list['link'] ?>">
              <div class="responsive">
                <table id="tbl_size" class="table text-center">
                  <thead>
                    <tr class="bg-info">
                      <th class="text-white font-weight-bold">Size</th>
                      <th class="text-white font-weight-bold">S (cm)</th>
                      <th class="text-white font-weight-bold">M (cm)</th>
                      <th class="text-white font-weight-bold">L (cm)</th>
                      <th class="text-white font-weight-bold">XL (cm)</th>
                      <th class="text-white font-weight-bold"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($size_list as $key => $value): ?>
                      <tr>
                        <td>
                          <input type='text' class='form-control' name='size[]' value='<?php echo $value["size"] ?>' required>
                          <input type='hidden' name='id[]' value='<?php echo $value["id"] ?>'>
                        </td>
                        <td>
                          <input type='number' class='form-control' name='s_size[]' value='<?php echo $value["s_size"] ?>' required>
                        </td>
                        <td>
                          <input type='number' class='form-control' name='m_size[]' value='<?php echo $value["m_size"] ?>' required>
                        </td>
                        <td>
                          <input type='number' class='form-control' name='l_size[]' value='<?php echo $value["l_size"] ?>' required>
                        </td>
                        <td>
                          <input type='number' class='form-control' name='xl_size[]' value='<?php echo $value["xl_size"] ?>' required>
                        </td>
                        <td>
                          <a href="<?php echo base_url() ?>product/size_delete_process/<?php echo $value['id'] ?>/<?php echo $product_list['link'] ?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this data?')"><i class="fas fa-trash m-0"></i></a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <div class="mt-2 row">
                <div class="col-12">
                  <button type="button" onclick="add_row_size()" class="btn btn-primary"><i class="fas fa-plus"></i> Add Row</button>
                  <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      
  </div>
</div>
<script>
  function delete_row_size(btn) {
    $(btn).closest("tr").remove();
  }

  function add_row_size() {
    var html = "<tr>"+
                  "<td>"+
                    "<input type='text' class='form-control' name='size[]' required>"+
                    "<input type='hidden' name='id[]' value='0'>"+
                  "</td>"+
                  "<td>"+
                    "<input type='number' class='form-control' name='s_size[]' required>"+
                  "</td>"+
                  "<td>"+
                    "<input type='number' class='form-control' name='m_size[]' required>"+
                  "</td>"+
                  "<td>"+
                    "<input type='number' class='form-control' name='l_size[]' required>"+
                  "</td>"+
                  "<td>"+
                    "<input type='number' class='form-control' name='xl_size[]' required>"+
                  "</td>"+
                  "<td>"+
                    "<button type='button' onclick='delete_row_size(this)' class='btn btn-danger'><i class='fas fa-trash m-0'></i></button>"+
                  "</td>"+
                "</tr>";
    $("#tbl_size").append(html);
  }
</script>