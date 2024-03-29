<style>
  .product-container {
    position: relative;
  }
  .product-svg {
    position: absolute;
    z-index: 2;
    mix-blend-mode: multiply;
  }
  .checkmark{
    border: 1px solid #000;
  }
</style>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb__links">
          <a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a>
          <!-- <a href="#">Women’s </a> -->
          <span><?= $product['name'] ?></span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="product__details__pic">
          <div class="product__details__pic__left product__thumb nice-scroll">
            <?php foreach ($product_picture_list as $key => $value): ?>
              <a class="pt active" href="#product-<?= $key ?>">
                <div class="product-container">
                  <svg class="product-svg">
                    <path class="product-shape" style="fill: <?= $product['color_code'] ?>" d="<?= $value['svg'] ?>" />
                  </svg>
                  <img data-hash="product--<?= $key ?>" class="product__big__img" src="<?php echo base_url() ?>admin/file/image/<?= $value['picture'] ?>" alt="">
                </div>
              </a>
            <?php endforeach; ?>
          </div>
          <div class="product__details__slider__content">
            <div class="product__details__pic__slider owl-carousel">
              <?php foreach ($product_picture_list as $key => $value): ?>
                <div class="product-container">
                  <svg class="product-svg">
                    <path class="product-shape" style="fill: <?= $product['color_code'] ?>" d="<?= $value['svg'] ?>" />
                  </svg>
                  <img data-hash="product--<?= $key ?>" class="product__big__img" src="<?php echo base_url() ?>admin/file/image/<?= $value['picture'] ?>" alt="">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="product__details__text">
          <h3><?= $product['name'] ?> <span><?php //Subtitle ?></span></h3>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <!-- <span>( 138 reviews )</span> -->
          </div>
          <?php if($product['discount_price'] == 0): ?>
            <div class="product__details__price">Rp <?= number_format($product['price'], 2,',', '.') ?></div>
          <?php else: ?>
            <div class="product__details__price">Rp <?= number_format($product['discount_price'], 2,',', '.') ?> <span>Rp <?= number_format($product['price'], 2,',', '.') ?></span></div>
          <?php endif; ?>
          <p><?= $product['description'] ?></p>
          <!-- <div class="product__details__button">
            <div class="quantity">
              <span>Quantity:</span>
              <div class="pro-qty">
                <input type="text" value="1">
              </div>
            </div>
            <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
            <ul>
              <li><a href="#"><span class="icon_heart_alt"></span></a></li>
              <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
            </ul>
          </div> -->
          <div class="product__details__widget">
            <ul>
              <li>
                <span>Availability:</span>
                <div class="stock__checkbox">
                  <label for="stockin">
                    In Stock
                    <input type="checkbox" id="stockin" disabled <?= ($product['stock_status'] == 0 ? 'checked' : 'checked') ?>>
                    <span class="checkmark"></span>
                  </label>
                </div>
              </li>
              <li>
                <span>Available color:</span>
                <div class="color__checkbox">
                  <?php foreach ($product_color_list as $key => $value): ?>
                    <label for="<?= $value['color_code'] ?>">
                      <input type="radio" name="color__radio" id="<?= $value['color_code'] ?>">
                      <span class="checkmark" onclick="change_color(this)" style="background-color: <?= $value['color_code'] ?>;"></span>
                    </label>
                  <?php endforeach ?>
                  <label></label>
                </div>
              </li>
              <li>
                <span>Available size:</span>
                <div class="size__btn">
                  <label for="xs-btn" class="active">
                    <input type="radio" id="xs-btn">
                    xs
                  </label>
                  <label for="s-btn">
                    <input type="radio" id="s-btn">
                    s
                  </label>
                  <label for="m-btn">
                    <input type="radio" id="m-btn">
                    m
                  </label>
                  <label for="l-btn">
                    <input type="radio" id="l-btn">
                    l
                  </label>
                  <label for="xl-btn">
                    <input type="radio" id="xl-btn">
                    xl
                  </label>
                  <label for="2xl-btn">
                    <input type="radio" id="2xl-btn">
                    2xl
                  </label>
                  <label for="3xl-btn">
                    <input type="radio" id="3xl-btn">
                    3xl
                  </label>
                </div>
              </li>
              <li>
                <span>Promotions:</span>
                <p><?= ($product['promotion'] == '' ? '-' : $product['promotion']) ?></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-12 d-none">
        <div class="product__details__tab">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
            </li> -->
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tabs-1" role="tabpanel">
              <h6>Description</h6>
              <p><?= $product['full_description'] ?></p>
            </div>
            <div class="tab-pane" id="tabs-2" role="tabpanel">
              <h6>Specification</h6>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
              consequat massa quis enim.</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
              quis, sem.</p>
            </div>
            <div class="tab-pane" id="tabs-3" role="tabpanel">
              <h6>Reviews ( 2 )</h6>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
              consequat massa quis enim.</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
              quis, sem.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="product-details spad">
  <div class="container">
    <a class="btn btn-block site-btn text-white" style="border-radius: 0px" href="https://wa.me/6281365538139?text=Halo, saya mau beli barang ini, masih ada?"><i class="fa fa-whatsapp"></i> BELI SEKARANG</a>
  </div>
</section>
<!-- <section class="product-details spad">
  <div class="container">
    <?php if(count($suggest_product) > 0): ?>
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="related__title">
          <h5>RELATED PRODUCTS</h5>
        </div>
      </div>
      <?php
        foreach ($suggest_product as $key => $value): 
      ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="product__item">
          <div class="product__item__pic set-bg" data-setbg="<?php echo base_url() ?>admin/file/image/<?php echo $value['main_picture'] ?>">
            <div class="label new">New</div>
            <ul class="product__hover">
              <li><a href="<?php echo base_url() ?>admin/file/image/<?php echo $value['main_picture'] ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
              <li><a href="<?php echo base_url() ?>shop/detail/<?php echo str_pad($value['id'], 6, "0", STR_PAD_LEFT); ?>"><span class="icon_heart_alt"></span></a></li>
            </ul>
          </div>
          <div class="product__item__text">
            <h6><a href="<?php echo base_url() ?>shop/detail/<?php echo str_pad($value['id'], 6, "0", STR_PAD_LEFT); ?>"><?= $value['name'] ?></a></h6>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="product__price">Rp <?= number_format(($product['discount_price'] == 0 ? $product['price'] : $product['discount_price']), 2,',', '.') ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section> -->
<!-- Product Details Section End -->
<script>
  $(document).ready(function() {
    $('.product-svg').each(function(i, elem) {
      var width = $(elem).closest('div').find('img').prop('naturalWidth');
      var height = $(elem).closest('div').find('img').prop('naturalHeight');
      $(elem).attr('viewBox', '0 0 '+width+' '+height);
    });
  });

  function change_color(btn) {
    $('.product-shape').css('fill', $(btn).css('background-color'));
  }
</script>