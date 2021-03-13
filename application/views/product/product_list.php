<div class="main-content">
  <div class="container-fluid">
    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Product List</h3>
          </div>
          <div class="card-body">
            <a href="<?= base_url() ?>product/product_create" class="btn btn-success"><i class="fa fa-plus"></i> Add New Product</a><br><br>
            <div class="row">
              <div class="col-md-12">
                <table class="table data_table">
                  <thead>
                    <tr class="bg-info">
                      <th class="text-white font-weight-bold">Link</th>
                      <th class="text-white font-weight-bold">Name</th>
                      <th class="text-white font-weight-bold">Picture Home Page</th>
                      <th class="text-white font-weight-bold">Main Picture</th>
                      <th class="text-white font-weight-bold">Category</th>
                      <th class="text-white font-weight-bold">Price</th>
                      <th class="text-white font-weight-bold">Description</th>
                      <th class="text-white font-weight-bold"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($product_list as $key => $value): ?>
                  <tr>
                    <td><?php echo $value['link'] ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo ($value['picture_thumb'] == "" ? "No Image" : "<image width='200px' src='".base_url()."file/image/".$value['picture_thumb']."'>") ?></td>
                    <td><?php echo ($value['picture_main'] == "" ? "No Image" : "<image width='200px' src='".base_url()."file/image/".$value['picture_main']."'>") ?></td>
                    <td><?php echo $value['category'] ?></td>
                    <td><?php echo $value['price'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td>
                      <a href="<?php echo base_url() ?>product/product_update/<?php echo $value['link'] ?>" class="btn btn-primary" title="Update"><i class="fas fa-edit m-0"></i></a>
                      <a href="<?php echo base_url() ?>product/product_delete_process/<?php echo $value['link'] ?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this data?')"><i class="fas fa-trash m-0"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
</script>