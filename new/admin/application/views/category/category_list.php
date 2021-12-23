<div class="main-content">
  <div class="container-fluid">
    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Category List</h3>
          </div>
          <div class="card-body">
            <a href="<?= base_url() ?>category/category_create" class="btn btn-success"><i class="fa fa-plus"></i> Add New Category</a><br><br>
            <div class="row">
              <div class="col-md-12">
                <table class="table data_table">
                  <thead>
                    <tr class="bg-info">
                      <th class="text-white font-weight-bold">Name</th>
                      <th class="text-white font-weight-bold">Status</th>
                      <th class="text-white font-weight-bold"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($category_list as $key => $value) : ?>
                      <tr>
                        <td><?php echo $value['name'] ?></td>
                        <td>
                          <?php if($value['status_delete'] == 1): ?>
                            <span class="badge badge-success">Active</span>
                          <?php elseif($value['status_delete'] == 0): ?>
                            <span class="badge badge-danger">Inactive</span>
                          <?php endif; ?>
                        </td>
                        <td>
                          <a href="<?php echo base_url() ?>category/category_update/<?php echo $value['id'] ?>" class="btn btn-primary" title="Update"><i class="fas fa-edit m-0"></i></a>
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