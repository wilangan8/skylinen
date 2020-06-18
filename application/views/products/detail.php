<section class="single-product ng-star-inserted">
    <div class="product-intro" style="min-height: 602px;">
        <div class="product-gallery">

            <div class="slider-for slick-initialized slick-slider owl-carousel-detail">
                <div class="slick-list draggable">
                    <div class="slick-track slick-for-main">
                        <div class="slide slick-slide ng-star-inserted">
                            <img itemprop="image" width="100%" class="image-center main-image image-loaded" src="<?= base_url('upload/'. $this->uri->segment(2) .'/'. $prod .'/'. $detail->id .'/'. $detail->product_img_1 .'') ?>">
                        </div>
                        <div class="slide slick-slide ng-star-inserted">
                            <img itemprop="image" width="100%" class="image-center main-image image-loaded" src="<?= base_url('upload/'. $this->uri->segment(2) .'/'. $prod .'/'. $detail->id .'/'. $detail->product_img_2 .'') ?>">
                        </div>
                        <div class="slide slick-slide ng-star-inserted">
                            <img itemprop="image" width="100%" class="image-center main-image image-loaded" src="<?= base_url('upload/'. $this->uri->segment(2) .'/'. $prod .'/'. $detail->id .'/'. $detail->product_img_3 .'') ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-nav slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track slick-nav-main">
                        <div class="slide slick-slide ng-star-inserted item">
                            <div class="thumbnail-container">
                                <img alt="" width="100%" src="<?= base_url('upload/'. $this->uri->segment(2) .'/'. $prod .'/'. $detail->id .'/'. $detail->product_img_1 .'') ?>">
                            </div>
                        </div>
                        <div class="slide slick-slide ng-star-inserted slick-active item" aria-hidden="false">
                            <div class="thumbnail-container">
                                <img alt="" width="100%" src="<?= base_url('upload/'. $this->uri->segment(2) .'/'. $prod .'/'. $detail->id .'/'. $detail->product_img_2 .'') ?>">
                            </div>
                        </div>
                        <div class="slide slick-slide ng-star-inserted slick-active item" aria-hidden="false">
                            <div class="thumbnail-container">
                                <img alt="" width="100%" src="<?= base_url('upload/'. $this->uri->segment(2) .'/'. $prod .'/'. $detail->id .'/'. $detail->product_img_3 .'') ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-full-size-image ng-star-inserted">
                <a class="close-full-size-image"></a>
            </div>

        </div>

        <div class="product-options">
            <div class="product-options-collaspe">
                <div class="product-options-toggle" style="background-image: url(<?= base_url('assets/images/chevron_down.svg') ?>);">
                    <p>hide</p>
                </div>
            </div>
            <div class="product-options-container">
                <div class="product-info">
                    <h1><?= $detail->name ?></h1>
                    <div class="product-price mobile">
                        <p>Info</p>
                    </div>
                    <div class="product-description">
                        <p class="product-description-content">
                            <?= $detail->full_detail ?>
                        </p>
                    </div>
                </div>
                <div class="product-price">
                    <a class="product-options-link page-scroll" href="#detail">More details</a>
                </div>
                <div class="ng-untouched ng-pristine ng-valid product-qty">
                    <div class="product-quantity">
                        <h4 class="product-options-subheading">Quantity</h4>
                        <div class="product-quantity-input">
                            <input type="text" class="ng-untouched ng-pristine ng-valid qty-input" id="<?= $detail->id ?>" value="1" min="1" max="99" readonly>
                            <div class="product-quantity-minus" id="val-min">-</div>
                            <div class="product-quantity-plus" id="val-plus">+</div>
                        </div>
                    </div>
                </div>
                <div class="product-add">
                    <button class="add_cart_detail btn btn-black ng-star-inserted" data-productid="<?= $detail->id ?>"
                                                             data-productname="<?= $detail->name ?>"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/'. $this->uri->segment(2) .'/'. $prod .'/'. $detail->id .'/'. $detail->product_img_1 .'') ?>">
                        <span class="ng-star-inserted"> Add to Cart </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="product-details bg-xxlgrey" id="detail">
        <div class="content-container">
            <h2 class="section-title">Product Details</h2>
            <div class="product-details-container">

               <!-- <div class="product-details-swatch ng-star-inserted">
                    <a class="product-details-swatch-expand"></a>
                    <div class="slider-swatch slick-initialized slick-slider">
                        <div class="swatch-prev slick-arrow" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track material-track">
                                <div class="slide slick-slide ng-star-inserted" style="width: 320px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                    <img alt="" class="slider-swatch-img" width="100%" src="<?= base_url('assets/images/ASPEN-FLAX-BED-LINEN-6-0614-1280x720.jpg') ?>">
                                    <div class="product-details-swatch-info">
                                        <span class="swatch-name">Flax</span>
                                    </div>
                                </div>
                                <div class="slide slick-slide ng-star-inserted" style="width: 320px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                    <img alt="" class="slider-swatch-img" width="100%" src="<?= base_url('assets/images/ASPEN-BLOOM-BED-LINEN-6-0177-1280x720.jpg') ?>">
                                    <div class="product-details-swatch-info">
                                        <span class="swatch-name">Bloom</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swatch-next slick-arrow" style=""></div>
                    </div>
               </div> -->

                <div class="product-details-material">
                    <div class="product-detail-scroll ng-star-inserted">
                        <h4>Material</h4>
                        <h3><?= $detail->material_title ?></h3>
                        <p>
                        <?= $detail->material_desc ?>
                        </p>
                    </div>
                </div>

                <div class="product-details-origin">
                    <div class="product-detail-scroll ng-star-inserted">
                        <h4>Origin</h4>
                        <h3><?= $detail->origin_title ?></h3>
                        <p>
                            <?= $detail->origin_desc ?>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    
</section>
  
    