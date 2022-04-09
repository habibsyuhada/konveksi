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
                      <th class="text-white font-weight-bold">Code</th>
                      <th class="text-white font-weight-bold">Name</th>
                      <th class="text-white font-weight-bold">Main Picture</th>
                      <th class="text-white font-weight-bold">Category</th>
                      <th class="text-white font-weight-bold">Price</th>
                      <th class="text-white font-weight-bold">Discount Price</th>
                      <th class="text-white font-weight-bold">Description</th>
                      <th class="text-white font-weight-bold"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($product_list as $key => $value): ?>
                  <tr>
                    <td><?php echo str_pad($value['id'], 6, "0", STR_PAD_LEFT);  ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo (@$picture_list[$value['id']]['picture'] == "" ? "No Image" : "<image width='200px' src='".base_url()."file/image/".$picture_list[$value['id']]['picture']."'>") ?></td>
                    <td>
                      <?php 
                        $category_arr = [];
                        foreach (explode(";", $value['category']) as $category) {
                          if(isset($category_list[$category])){
                            $category_arr[] = $category_list[$category] ;
                          }
                        }
                        echo join(", ", $category_arr);
                      ?>
                    </td>
                    <td><?php echo $value['price'] ?></td>
                    <td><?php echo $value['discount_price'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td>
                      <a href="<?php echo base_url() ?>product/product_update/<?php echo $value['id'] ?>" class="btn btn-primary" title="Update"><i class="fas fa-edit m-0"></i></a>
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