
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
                          <a class="nav-link active show" href="#waiting" data-toggle="tab">
                            Waiting
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#completed" data-toggle="tab">
                            Completed
                            <div class="ripple-container"></div>
                          <div class="ripple-container"></div></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">

                    <div class="tab-pane active show" id="waiting">
                      <a href="javascript:;" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="javascript:;" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover datatable" id="waiting-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Email</th>
                              <th>Whatsapp</th>
                              <th>Location</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($waiting)){ foreach($waiting as $row){ ?>
                            <tr>
                              <td class="text-primary text-uppercase"><?= $row->invoice_id ?></td>
                              <td><?= $row->email.' ('. ucwords(strtolower($row->first_name)).' '.ucwords(strtolower($row->last_name)) .')' ?></td>
                              <td><?= $row->wa ?></td>
                              <td><?= $row->city.', '.$row->state ?></td>
                              <td>
                                <a class="delete" id="<?= $row->invoice_id ?>"><i class="material-icons text-danger">delete</i></a>
                              </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="4" class="text-center">No product(s) found...</td></tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="tab-pane" id="completed">
                      <a href="javascript:;" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="javascript:;" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover datatable" id="completed-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Email</th>
                              <th>Whatsapp</th>
                              <th>Location</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($completed)){ foreach($completed as $row){ ?>
                            <tr>
                              <td class="text-primary text-uppercase"><?= $row->invoice_id ?></td>
                              <td><?= $row->email.' ('. ucwords(strtolower($row->first_name)).' '.ucwords(strtolower($row->last_name)) .')' ?></td>
                              <td><?= $row->wa ?></td>
                              <td><?= $row->city.', '.$row->state ?></td>
                              <td>
                                <a class="delete" id="<?= $row->invoice_id ?>"><i class="material-icons text-danger">delete</i></a>
                              </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="5" class="text-center">No product(s) found...</td></tr>
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