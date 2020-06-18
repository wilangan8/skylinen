
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active show" href="#sheeting" data-toggle="tab">
                            Sheeting
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#flatsheet" data-toggle="tab">
                            Flat Sheet
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#fittedsheet" data-toggle="tab">
                            Fitted Sheet
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#pillowcase" data-toggle="tab">
                            Pillow Case
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#balstercase" data-toggle="tab">
                            Balster Case
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#duvetcover" data-toggle="tab">
                            Duvet Cover
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">

                    <div class="tab-pane active show" id="sheeting">
                      <a href="<?= base_url('sky-admin/products/bedlinen/add-product/sheeting') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="sheeting-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($sheeting)){ foreach($sheeting as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedlinen/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="flatsheet">
                      <a href="<?= base_url('sky-admin/products/bedlinen/add-product/flatsheet') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="flatsheet-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($flatsheet)){ foreach($flatsheet as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedlinen/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="fittedsheet">
                      <a href="<?= base_url('sky-admin/products/bedlinen/add-product/fittedsheet') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="fittedsheet-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($fittedsheet)){ foreach($fittedsheet as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedlinen/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="pillowcase">
                      <a href="<?= base_url('sky-admin/products/bedlinen/add-product/pillowcase') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="pillowcase-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php if(!empty($pillowcase)){ foreach($pillowcase as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedlinen/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="balstercase">
                      <a href="<?= base_url('sky-admin/products/bedlinen/add-product/balstercase') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="balstercase-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($balstercase)){ foreach($balstercase as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedlinen/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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
                    <div class="tab-pane" id="duvetcover">
                      <a href="<?= base_url('sky-admin/products/bedlinen/add-product/duvetcover') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="duvetcover-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($duvetcover)){ foreach($duvetcover as $row){ ?>
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
                                <a href="<?= base_url('sky-admin/products/bedlinen/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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