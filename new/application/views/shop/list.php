<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb__links">
          <a href="./index.html"><i class="fa fa-home"></i> Home</a>
          <span>Shop</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="shop__sidebar">
          <div class="sidebar__color">
            <div class="section-title">
              <h4>CATEGORIES</h4>
            </div>
            <div class="size__list color__list">
              <?php foreach ($category_list as $key => $value): ?>
                <label for="<?= 'category_'.$value['id'] ?>">
                  <?= $value['name'] ?>
                  <input type="checkbox" id="<?= 'category_'.$value['id'] ?>"  value='<?= $value['name'] ?>' onchange="select_category(this)" <?= (in_array($value['name'], $category) ? 'checked' : '') ?>>
                  <span class="checkmark"></span>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9">
        <div class="row">
          <?php foreach ($product_list as $key => $value): ?>
            <div class="col-lg-4 col-md-6">
              <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url() ?>admin/file/image/<?php echo $value['main_picture'] ?>">
                  <!-- <div class="label new">New</div> -->
                  <ul class="product__hover">
                    <li><a href="<?php echo base_url() ?>admin/file/image/<?php echo $value['main_picture'] ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="<?php echo base_url() ?>shop/detail/<?php echo str_pad($value['id'], 6, "0", STR_PAD_LEFT); ?>"><span class="icon_heart_alt"></span></a></li>
                    <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                  </ul>
                </div>
                <div class="product__item__text">
                  <h6><a href="<?php echo base_url() ?>shop/detail/<?php echo str_pad($value['id'], 6, "0", STR_PAD_LEFT); ?>"><?php echo $value['name'] ?></a></h6>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">Rp. <?php echo number_format($value['discount_price'] == 0 ? $value['price'] : $value['discount_price'],2,",",".") ?></a></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <div class="col-lg-12 text-center">
            <div class="pagination__option">
              <?php for ($i=1; $i <= ceil($product_count_all_list/9); $i++): ?>
              <a href="<?= base_url() ?>shop/list?page=<?= $i ?>&category=<?= join('; ', $category) ?>" class="<?= ($i == $page ? 'bg-dark text-white' : '') ?>"><?= $i ?></a>
              <?php endfor; ?>
              <!-- <a href="#"><i class="fa fa-angle-right"></i></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Shop Section End -->
<script>
  <?php if(count($category) > 0): ?>
    var category_selected = ["<?= join('", "', $category) ?>"];
  <?php else: ?>
    var category_selected = [];
  <?php endif; ?>
  function select_category(input) {
    if ($(input).is(':checked')) {
      category_selected.push($(input).val());
    }
    else{
      category_selected.splice( $.inArray($(input).val(), category_selected), 1 );
    }
    window.location = '<?= base_url()."shop/list?page=1&category=" ?>' + category_selected.join("; ");
  }
</script>