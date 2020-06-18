
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-success">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active show" href="#innerduvet" data-toggle="tab">
                            Inner Duvet
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#mattressprotector" data-toggle="tab">
                            Mattress Protector
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#pillow" data-toggle="tab">
                            Pillow
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#balster" data-toggle="tab">
                            Balster
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#cushion" data-toggle="tab">
                            Cushion
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">

                    <div class="tab-pane active show" id="innerduvet">
                      <a href="<?= base_url('sky-admin/products/bedding/add-product/innerduvet') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="innerduvet-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($innerduvet)){ foreach($innerduvet as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedding/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="mattressprotector">
                      <a href="<?= base_url('sky-admin/products/bedding/add-product/mattressprotector') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="mattressprotector-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($mattressprotector)){ foreach($mattressprotector as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedding/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="pillow">
                      <a href="<?= base_url('sky-admin/products/bedding/add-product/pillow') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="pillow-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($pillow)){ foreach($pillow as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedding/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="balster">
                      <a href="<?= base_url('sky-admin/products/bedding/add-product/balster') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="balster-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($balster)){ foreach($balster as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedding/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="cushion">
                      <a href="<?= base_url('sky-admin/products/bedding/add-product/cushion') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="cushion-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($cushion)){ foreach($cushion as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedding/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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