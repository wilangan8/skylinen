
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-warning">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link">
                            Kitchen & dining
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">

                    <div class="tab-pane active" id="kitchenanddining">
                    <a href="<?= base_url('sky-admin/products/kitchen-and-dining/add-product') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>

                      <a href="javascript:;" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="javascript:;" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="kitchenanddining-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($kitchenanddining)){ foreach($kitchenanddining as $row){ ?>
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
                              <a href="<?= base_url('sky-admin/products/kitchen-and-dining/edit-product/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
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