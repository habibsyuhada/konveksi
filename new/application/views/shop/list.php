<style>
  .product-svg {
    position: absolute;
    z-index: 2;
    mix-blend-mode: multiply;

    top: 0%;  /* position the top  edge of the element at the middle of the parent */
    left: 50%; /* position the left edge of the element at the middle of the parent */
    transform: translate(-50%, -0%);
  }
</style>
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
                <a href="<?php echo base_url() ?>shop/detail/<?php echo str_pad($value['id'], 6, "0", STR_PAD_LEFT); ?>">
                  <div style="position: absolute; overflow: hidden">
                    <svg class="product-svg" preserveAspectRatio="xMidYMid meet" width="100%" height="100%">
                      <path class="product-shape" style="fill: <?= $color_list[$value['id']]['color_code'] ?>" d="<?= $picture_list[$value['id']]['svg'] ?>" />
                    </svg>
                  </div>
                  <div class="product__item__pic set-bg" data-setbg="<?php echo base_url() ?>admin/file/image/<?php echo $picture_list[$value['id']]['picture'] ?>">
                    <!-- <div class="label new">New</div> -->
                    <ul class="product__hover">
                      <!-- <li><a href="<?php echo base_url() ?>admin/file/image/<?php echo $picture_list[$value['id']]['picture'] ?>" class="image-popup"><span class="arrow_expand"></span></a></li> -->
                      <!-- <li><a href="<?php echo base_url() ?>shop/detail/<?php echo str_pad($value['id'], 6, "0", STR_PAD_LEFT); ?>"><span class="icon_heart_alt"></span></a></li> -->
                      <!-- <li><a href="#"><span class="icon_bag_alt"></span></a></li> -->
                    </ul>
                  </div>
                </a>
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
<script>
  $(document).ready(function() {
    $('.product-svg').each(function(i, elem) {
      var img_container = $(elem).closest('a').find('.product__item__pic')
      var img = new Image;
      var image_url = $(img_container).css('background-image').match(/^url\("?(.+?)"?\)$/);
      img.src = image_url[1];
      var width = img.width;
      var height = img.height;

      var fullhdWidth = width;
      var fullhdHeight = height;
      var fullhdRatio = fullhdWidth / fullhdHeight; // About 1.7

      var containerWidth = $(img_container).width();
      var containerHeight = $(img_container).height();
      var containerRatio = containerWidth / containerHeight;
      var realWidth = null;
      var realHeight = null;


      if(containerRatio > fullhdRatio)
      {
          realWidth = containerWidth;
          realHeight = containerWidth/fullhdRatio;
      }
      else
      {
          realWidth = containerHeight*fullhdRatio;
          realHeight = containerHeight;
      } 
      console.log(width, height)
      console.log(containerWidth, containerHeight, containerRatio);
      console.log(realWidth, realHeight);
      
      // $(elem).attr('viewBox', (realWidth-containerWidth)+' 0 '+width+' '+height);
      $(elem).attr('viewBox', (0)+' 0 '+width+' '+height);
      $(elem).attr('width', realWidth);

      $(elem).attr('height', realHeight);
      $(elem).parent().css('width', containerWidth+"px");
      $(elem).parent().css('height', containerHeight+"px");
    });

  });
</script>