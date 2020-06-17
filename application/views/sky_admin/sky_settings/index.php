
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-info">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active show" href="#masteradmin" data-toggle="tab">
                            Master Admin
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#loginlog" data-toggle="tab">
                            Login Log
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">

                    <div class="tab-pane active" id="masteradmin">
                      <a href="<?= base_url('sky-admin/settings/master-admin') ?>" class="btn btn-info btn-round"><i class="material-icons">add</i></a>
                      <div class="table-responsive">
                          <table class="table table-hover display responsive nowrap" width="100%" id="masteradmin-table">
                            <thead class="text-primary">
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Access</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if(!empty($user)){ foreach($user as $row){ ?>
                              <tr>
                                <td class="text-primary text-uppercase"><?= $row->id ?></td>
                                <td><?= $row->name ?></td>
                                <td>
                                  <?php 
                                    if($row->status == "1"){
                                      echo "<button class='btn btn-outline-success'>Online</button>";
                                    }else{
                                      echo "<button class='btn btn-outline-danger'>Offline</button>";
                                    }
                                  ?>
                                </td>
                                <td>
                                  <?php 
                                    if($row->hak == "Y"){
                                      echo "<button class='btn btn-outline-success'>Granted</button>";
                                    }else{
                                      echo "<button class='btn btn-outline-danger'>Not Granted</button>";
                                    }
                                  ?>
                                </td>
                                <td>
                                <a href="<?= base_url('sky-admin/settings/edit-admin/'. $row->id .'') ?>"><i class="material-icons text-warning">edit</i></a>
                                  <a href="#" class="delete-admin" id="<?= $row->id ?>"><i class="material-icons text-danger">delete</i></a>
                                </td>
                              </tr>
                              <?php } }else{ ?>
                              <tr><td colspan="5" class="text-center">No product(s) found...</td></tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="loginlog">
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="loginlog-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($loginlog)){ foreach($loginlog as $row){ ?>
                            <tr>
                              <td class="text-primary text-uppercase"><?= $row->user_log_id ?></td>
                              <td><?= $row->name_log ?></td>
                              <td><?= $row->date_log ?></td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="3" class="text-center">No product(s) found...</td></tr>
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