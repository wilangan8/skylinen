<section class="ftco-section-title">
            <img src="<?= base_url('assets/images/sheetingabode.jpg') ?>" class="col-lg-12 content-image" style="max-height:inherit;">
    </section>

    <section class="ftco-section-content">
      <div class="row-title">
        <div class="col-md-12">
          <div class="col-title">
            <h2 class="text-left">Balster</h2>

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
        <?php foreach ($balster as $obj):  ?>
        <div class="col-product col-md-6">
          <a href="<?= site_url('products/bedding/detail/'. $obj->id .'') ?>">
            <img src="<?= base_url('upload/bedding/balster/'. $obj->id .'/'. $obj->product_img_1 .'') ?>" class="col-lg-12 content-image">
          </a>
          <div class="title-bottom">
            <a class="text-box" data-toggle="modal" data-target="#detail<?= $obj->id ?>" href="#">
              <?= $obj->name ?>
            </a>
            <p class="float-right">
              <button class="add_cart btn btn-outline-black" data-productid="<?= $obj->id ?>"
                                                             data-productname="<?= $obj->name ?>"
                                                             data-productqty="1"
                                                             data-productprice="0"
                                                             data-productimg="<?= base_url('upload/bedding/balster/'. $obj->id .'/'. $obj->product_img_1 .'') ?>">
                                                              Get Quotation
              </button>
            </p>
            <p><?= $obj->mini_detail ?></p>
          </div>
        </div>

        <div class="modal animated zoomIn" id="detail<?= $obj->id ?>">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4">
                    <img src="<?= base_url('upload/bedding/balster/'. $obj->id .'/'. $obj->product_img_1 .'') ?>" class="col-lg-12">
                  </div>
                  <div class="col-md-8">
                    <h2><?= $obj->name ?></h2>
                    <p><?= $obj->full_detail ?></p>
                    <button class="add_cart btn btn-outline-black" data-productid="<?= $obj->id ?>"
                                                                    data-productname="<?= $obj->name ?>"
                                                                    data-productqty="1"
                                                                    data-productprice="0"
                                                                    data-productimg="<?= base_url('upload/bedding/balster/'. $obj->id .'/'. $obj->product_img_1 .'') ?>">
                                                                      Get Quotation
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php endforeach; ?>
      </div>
  </section>
  
    