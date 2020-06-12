
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">king_bed</i>
                  </div>
                  <p class="card-category">Bed Linen</p>
                  <h3 class="card-title"><?= $bedlinen_count ?>
                    <small>Items</small>
                  </h3>
                </div>
                <div class="card-footer dropdown">
                  <div class="stats">
                    <i class="material-icons text-primary">add</i>
                    <a href="javascript:;" id="Bedlinen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add New Product...</a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Bedlinen">
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedlinen/add-product/sheeting') ?>">Sheeting</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedlinen/add-product/flatsheet') ?>">Flat Sheet</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedlinen/add-product/fittedsheet') ?>">Fitted Sheet</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedlinen/add-product/pillowcase') ?>">Pillow Case</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedlinen/add-product/balstercase') ?>">Balster Case</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedlinen/add-product/duvetcover') ?>">Duvet Cover</a>
                    </div>
                  </div>
                  <div class="stats">
                    <i class="material-icons text-primary">info</i>
                    <a href="javascript:;">Info</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">single_bed</i>
                  </div>
                  <p class="card-category">Bedding</p>
                  <h3 class="card-title"><?= $bedding_count ?>
                    <small>Items</small>
                  </h3>
                </div>
                <div class="card-footer dropdown">
                  <div class="stats">
                    <i class="material-icons text-success">add</i>
                    <a href="javascript:;" id="Bedding" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add New Product...</a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Bedding">
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedding/add-product/innerduvet') ?>">Inner Duvet</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedding/add-product/mattressprotector') ?>">Mattress Protector</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedding/add-product/pillow') ?>">Pillow</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedding/add-product/balster') ?>">Balster</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bedding/add-product/cushion') ?>">Cushion</a>
                    </div>
                  </div>
                  <div class="stats">
                    <i class="material-icons text-success">info</i>
                    <a href="javascript:;">Info</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">bathtub</i>
                  </div>
                  <p class="card-category">Bathroom</p>
                  <h3 class="card-title"><?= $bathroom_count ?>
                    <small>Items</small>
                  </h3>
                </div>
                <div class="card-footer dropdown">
                  <div class="stats">
                    <i class="material-icons text-info">add</i>
                    <a href="javascript:;" id="Bathroom" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add New Product...</a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Bathroom">
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bathroom/add-product/bathtowel') ?>">Bath Towel</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bathroom/add-product/handtowel') ?>">Hand Towel</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bathroom/add-product/facetowel') ?>">Face Towel</a>
                      <a class="dropdown-item" href="<?= base_url('sky-admin/products/bathroom/add-product/bathmat') ?>">Bathmat</a>
                    </div>
                  </div>
                  <div class="stats">
                    <i class="material-icons text-info">info</i>
                    <a href="javascript:;">Info</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_dining</i>
                  </div>
                  <p class="card-category">Kitchen & Dining</p>
                  <h3 class="card-title"><?= $kitchenanddining_count ?>
                    <small>Items</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">add</i>
                    <a href="<?= base_url('sky-admin/products/kitchen-and-dining/add-product') ?>">Add New Product...</a>
                  </div>
                  <div class="stats">
                    <i class="material-icons text-warning">info</i>
                    <a href="javascript:;">Info</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>