
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
                    <a data-toggle="modal" data-target="#detail-bedlinen" href="#">Info</a>

                    <div class="modal animated zoomIn" id="detail-bedlinen">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Detail Bedlinen</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Category</th>
                                        <th class="text-center">Quantity/Product</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Sheeting</td>
                                        <td class="text-center"><?= $sheeting ?></td>
                                      </tr>
                                      <tr>
                                        <td>Flat Sheet</td>
                                        <td class="text-center"><?= $flatsheet ?></td>
                                      </tr>
                                      <tr>
                                        <td>Fitted Sheet</td>
                                        <td class="text-center"><?= $fittedsheet ?></td>
                                      </tr>
                                      <tr>
                                        <td>Pillow Case</td>
                                        <td class="text-center"><?= $pillowcase ?></td>
                                      </tr>
                                      <tr>
                                        <td>Balster Case</td>
                                        <td class="text-center"><?= $balstercase ?></td>
                                      </tr>
                                      <tr>
                                        <td>Duvet Cover</td>
                                        <td class="text-center"><?= $duvetcover ?></td>
                                      </tr>
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
                    <a data-toggle="modal" data-target="#detail-bedding" href="#">Info</a>

                    <div class="modal animated zoomIn" id="detail-bedding">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Detail Bedding</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Category</th>
                                        <th class="text-center">Quantity/Product</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Inner Duvet</td>
                                        <td class="text-center"><?= $innerduvet ?></td>
                                      </tr>
                                      <tr>
                                        <td>Mattress Protector</td>
                                        <td class="text-center"><?= $mattressprotector ?></td>
                                      </tr>
                                      <tr>
                                        <td>Pillow</td>
                                        <td class="text-center"><?= $pillow ?></td>
                                      </tr>
                                      <tr>
                                        <td>Balster</td>
                                        <td class="text-center"><?= $balster ?></td>
                                      </tr>
                                      <tr>
                                        <td>Cushion</td>
                                        <td class="text-center"><?= $cushion ?></td>
                                      </tr>
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
                    <a data-toggle="modal" data-target="#detail-bathroom" href="#">Info</a>

                    <div class="modal animated zoomIn" id="detail-bathroom">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Detail Bathroom</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Category</th>
                                        <th class="text-center">Quantity/Product</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Bath Towel</td>
                                        <td class="text-center"><?= $bathtowel ?></td>
                                      </tr>
                                      <tr>
                                        <td>Hand Towel</td>
                                        <td class="text-center"><?= $handtowel ?></td>
                                      </tr>
                                      <tr>
                                        <td>Face Towel</td>
                                        <td class="text-center"><?= $facetowel ?></td>
                                      </tr>
                                      <tr>
                                        <td>Bathmat</td>
                                        <td class="text-center"><?= $bathmat ?></td>
                                      </tr>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>