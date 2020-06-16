    <section class="ftco-section-title">
        <div class="col-md-12">
            <div class="search-product section-search-bar">
                <form class="form-search" action="<?= base_url('products') ?>" method="get">
                    <input name="search_query" autocomplete="off" placeholder="Quilt Covers" type="text" value="<?= $keywoard ?>">
                    <button class="btn btn-black" type="submit">Search</button>
                </form>
            </div>
        </div>
    </section>

    <section class="ftco-section-content">
      <div class="row-title">
        <div class="col-md-12">
          <div class="col-title">
            <h2 class="text-left">Search <strong>'<?= $keywoard ?>'</strong></h2>

            <div class="refine-grid">
              
              <a class="third-tiles">
                <svg class="ng-tns-c6-6" xmlns:xlink="http://www.w3.org/1999/xlink" height="30px" version="1.1" viewBox="0 0 32 32" width="30px" xmlns="http://www.w3.org/2000/svg">
                  <g class="ng-tns-c6-6" fill="none" fill-rule="evenodd" id="Symbols" stroke="none" stroke-width="1">
                    <g class="ng-tns-c6-6" id="icons-/-black-/-3x-grid" transform="translate(1.000000, 1.000000)">
                      <g class="ng-tns-c6-6">
                        <rect class="ng-tns-c6-6" height="30" id="Rectangle" width="30" x="0" y="0"></rect>
                        <g class="ng-tns-c6-6" id="Group-1" stroke="#444444" stroke-linecap="square">
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="0" y="0"></rect>
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="22" y="0"></rect>
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="11" y="0"></rect>
                        </g>
                        <g class="ng-tns-c6-6" id="Group-1" stroke="#444444" stroke-linecap="square" transform="translate(0.000000, 22.000000)">
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="0" y="0"></rect>
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="22" y="0"></rect>
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="11" y="0"></rect>
                        </g>
                        <g class="ng-tns-c6-6" id="Group-1" stroke="#444444" stroke-linecap="square" transform="translate(0.000000, 11.000000)">
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="0" y="0"></rect>
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="22" y="0"></rect>
                          <rect class="ng-tns-c6-6" height="8" id="Rectangle-2" width="8" x="11" y="0"></rect>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>

              <a class="half-tiles active">
                <svg class="ng-tns-c6-6" xmlns:xlink="http://www.w3.org/1999/xlink" height="30px" version="1.1" viewBox="0 0 32 31" width="30px" xmlns="http://www.w3.org/2000/svg">
                  <g class="ng-tns-c6-6" fill="none" fill-rule="evenodd" id="Symbols" stroke="none" stroke-width="1">
                    <g class="ng-tns-c6-6" id="filters-/-toolbar" stroke="#444444" transform="translate(-1538.000000, -24.000000)">
                      <g class="ng-tns-c6-6" id="icons-/-black-/-2x-grid" transform="translate(0.000000, -9.000000)">
                        <g class="ng-tns-c6-6" transform="translate(1539.000000, 34.000000)">
                          <g class="ng-tns-c6-6" id="Group-2">
                            <rect class="ng-tns-c6-6" height="12" id="Rectangle-2" width="12" x="0" y="0"></rect>
                            <rect class="ng-tns-c6-6" height="12" id="Rectangle-2" width="12" x="18" y="0"></rect>
                            <rect class="ng-tns-c6-6" height="12" id="Rectangle-2" width="12" x="18" y="17"></rect>
                            <rect class="ng-tns-c6-6" height="12" id="Rectangle-2" width="12" x="0" y="17"></rect>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>

            </div>

          </div>
        </div>
      </div>
      <div class="row-content">

        <?php foreach ($sheeting as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedlinen/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedlinen/sheeting/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedlinen/sheeting/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($flatsheet as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedlinen/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedlinen/flatsheet/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedlinen/flatsheet/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($fittedsheet as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedlinen/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedlinen/fittedsheet/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedlinen/fittedsheet/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($pillowcase as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedlinen/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedlinen/pillowcase/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedlinen/pillowcase/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($balstercase as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedlinen/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedlinen/balstercase/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedlinen/balstercase/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($duvetcover as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedlinen/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedlinen/duvetcover/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedlinen/duvetcover/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- END BED LINEN -->

        <?php foreach ($innerduvet as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedding/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedding/innerduvet/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedding/innerduvet/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($mattressprotector as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedding/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedding/mattressprotector/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedding/mattressprotector/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($pillow as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedding/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedding/pillow/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedding/pillow/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($balster as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedding/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedding/balster/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedding/balster/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($cushion as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedding/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bedding/cushion/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedding/cushion/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- END BEDDING -->

        <?php foreach ($bathtowel as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bathroom/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bathroom/bathtowel/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bathroom/bathtowel/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($handtowel as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bathroom/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bathroom/handtowel/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bathroom/handtowel/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($facetowel as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bathroom/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bathroom/facetowel/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bathroom/facetowel/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <?php foreach ($bathmat as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bathroom/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/bathroom/bathmat/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bathroom/bathmat/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- END BATHROOM -->

        <?php foreach ($kitchenanddining as $row):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/kitchen-and-dining/detail/'. $row->id .'') ?>">
            <img src="<?= base_url('upload/kitchen-and-dining/'. $row->id .'/'. $row->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" data-toggle="modal" data-target="#detail<?= $row->id ?>" href="#">
              <?= $row->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $row->id ?>"
                                                             data-productname="<?= $row->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/kitchen-and-dining/'. $row->id .'/'. $row->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $row->mini_detail ?></p>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- END KITCHEN AND DINING -->
        <?php if(count($sheeting) == 0){ ?>
        <div class="col-not-found col-md-12">
          <img src="<?= base_url('assets/images/product_not_found.svg') ?>" alt="not-found" class="img-not-found">
        </div>
        <?php } ?>

      </div>
  </section>
  
    