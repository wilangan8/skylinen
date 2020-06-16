
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-info">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Products:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active show" href="#bathtowel" data-toggle="tab">
                            Bath Towel
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#handtowel" data-toggle="tab">
                            Hand Towel
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#facetowel" data-toggle="tab">
                            Face Towel
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#bathmat" data-toggle="tab">
                            Bathmat
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">

                    <div class="tab-pane active show" id="bathtowel">
                      <a href="<?= base_url('sky-admin/products/bathroom/add-product/bathtowel') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>

                      <a href="javascript:;" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="javascript:;" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="bathtowel-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($bathtowel)){ foreach($bathtowel as $row){ ?>
                            <tr>
                              <td class="text-primary text-uppercase"><?= $row->id ?></td>
                              <td><?= $row->name ?></td>
                              <td>
                                <?php 
                                  if($row->status == "yes"){
                                    echo "<button class='btn btn-outline-success'>Active</button>";
                                  }else{
                                    echo "<button class='btn btn-outline-danger'>Inactive</button>";
                                  }
                                ?>
                              </td>
                              <td>
                                <a href="<?= base_url('sky-admin/products/bathroom/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
                                <a href="#" class="delete" id="<?= $row->id ?>"><i class="material-icons text-danger">delete</i></a>
                              </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="4" class="text-center">No product(s) found...</td></tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane" id="handtowel">
                      <a href="<?= base_url('sky-admin/products/bathroom/add-product/handtowel') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>

                      <a href="javascript:;" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="javascript:;" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="handtowel-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($handtowel)){ foreach($handtowel as $row){ ?>
                            <tr>
                              <td class="text-primary text-uppercase"><?= $row->id ?></td>
                              <td><?= $row->name ?></td>
                              <td>
                                <?php 
                                  if($row->status == "yes"){
                                    echo "<button class='btn btn-outline-success'>Active</button>";
                                  }else{
                                    echo "<button class='btn btn-outline-danger'>Inactive</button>";
                                  }
                                ?>
                              </td>
                              <td>
                                <a href="<?= base_url('sky-admin/products/bathroom/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
                                <a href="#" class="delete" id="<?= $row->id ?>"><i class="material-icons text-danger">delete</i></a>
                              </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="4" class="text-center">No product(s) found...</td></tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane" id="facetowel">
                      <a href="<?= base_url('sky-admin/products/bathroom/add-product/facetowel') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>

                      <a href="javascript:;" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="javascript:;" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="facetowel-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($facetowel)){ foreach($facetowel as $row){ ?>
                            <tr>
                              <td class="text-primary text-uppercase"><?= $row->id ?></td>
                              <td><?= $row->name ?></td>
                              <td>
                                <?php 
                                  if($row->status == "yes"){
                                    echo "<button class='btn btn-outline-success'>Active</button>";
                                  }else{
                                    echo "<button class='btn btn-outline-danger'>Inactive</button>";
                                  }
                                ?>
                              </td>
                              <td>
                                <a href="<?= base_url('sky-admin/products/bathroom/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
                                <a href="#" class="delete" id="<?= $row->id ?>"><i class="material-icons text-danger">delete</i></a>
                              </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="4" class="text-center">No product(s) found...</td></tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane" id="bathmat">
                      <a href="<?= base_url('sky-admin/products/bathroom/add-product/bathmat') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>

                      <a href="javascript:;" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="javascript:;" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="bathmat-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($bathmat)){ foreach($bathmat as $row){ ?>
                            <tr>
                              <td class="text-primary text-uppercase"><?= $row->id ?></td>
                              <td><?= $row->name ?></td>
                              <td>
                                <?php 
                                  if($row->status == "yes"){
                                    echo "<button class='btn btn-outline-success'>Active</button>";
                                  }else{
                                    echo "<button class='btn btn-outline-danger'>Inactive</button>";
                                  }
                                ?>
                              </td>
                              <td>
                                <a href="<?= base_url('sky-admin/products/bathroom/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
                                <a href="#" class="delete" id="<?= $row->id ?>"><i class="material-icons text-danger">delete</i></a>
                              </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="4" class="text-center">No product(s) found...</td></tr>
                            <?php } ?>
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