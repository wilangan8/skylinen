
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
                      <a href="<?= base_url('export/customer_all_xls') ?>" target="_blank" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="<?= base_url('export/customer_all_pdf') ?>" target="_blank" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" id="waiting-table">
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
                              <td class="text-primary text-uppercase"><a data-toggle="modal" data-target="#detail-waiting<?= $row->invoice_id ?>" href="#">#<?= $row->invoice_id ?></a></td>
                              <td><?= $row->email.' ('. ucwords(strtolower($row->first_name)).' '.ucwords(strtolower($row->last_name)) .')' ?></td>
                              <td><?= $row->wa ?></td>
                              <td><?= $row->city.', '.$row->state ?></td>
                              <td>
                                <a class="btn btn-warning text-white complete-it" id="<?= $row->invoice_id ?>">Complete this order!</a>
                              </td>
                            </tr>

                            <div class="modal animated zoomIn" id="detail-waiting<?= $row->invoice_id ?>">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">
                                      Detail INVOICE#<?= $row->invoice_id ?>
                                      <button class="btn btn-warning"><i class="fa fa-clock-o"></i> Waiting</button>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="invoice_id">INVOICE ID</label>
                                        <input type="text" name="invoice_id" value="<?= $row->invoice_id ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-8">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="<?= $row->email ?>" class="form-control" readonly>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" value="<?= $row->first_name ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" value="<?= $row->last_name ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="company">Company (optional)</label>
                                        <input type="text" name="company" value="<?= $row->company ?>" class="form-control" readonly>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" name="phone_number" value="<?= $row->phone_number ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="wa">Whatsapp</label>
                                        <input type="text" name="wa" value="<?= $row->wa ?>" class="form-control" readonly>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12" style="padding-left:15px;padding-right:15px">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" rows="5" name="address" readonly><?= $row->address ?></textarea>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" name="city" value="<?= $row->city ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="state">State</label>
                                        <input type="text" name="state" value="<?= $row->state ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="zip">Zip</label>
                                        <input type="text" name="zip" value="<?= $row->zip ?>" class="form-control" readonly>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12" style="padding-left:15px;padding-right:15px">
                                        <label for="products">Products ID List</label>
                                        <textarea class="form-control" rows="4" name="products" readonly><?= $row->products ?></textarea>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php } }else{ ?>
                            <tr><td colspan="5" class="text-center">No Customer(s) found...</td></tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="tab-pane" id="completed">
                      <a href="<?= base_url('export/customer_all_xls') ?>" target="_blank" class="btn btn-success float-right"><i class="material-icons">get_app</i> Xls</a>
                      <a href="<?= base_url('export/customer_all_pdf') ?>" target="_blank" class="btn btn-danger float-right"><i class="material-icons">get_app</i> Pdf</a>
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" width="100%" id="completed-table">
                          <thead class="text-primary">
                            <tr>
                              <th>#</th>
                              <th>Email</th>
                              <th>Whatsapp</th>
                              <th>Location</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($completed)){ foreach($completed as $row){ ?>
                            <tr>
                              <td class="text-primary text-uppercase"><a data-toggle="modal" data-target="#detail-completed<?= $row->invoice_id ?>" href="#"><?= $row->invoice_id ?></a></td>
                              <td><?= $row->email.' ('. ucwords(strtolower($row->first_name)).' '.ucwords(strtolower($row->last_name)) .')' ?></td>
                              <td><?= $row->wa ?></td>
                              <td><?= $row->city.', '.$row->state ?></td>
                              <td>
                                <a class="btn btn-success text-white"><i class="material-icons">done</i> Order Completed!</a>
                              </td>
                            </tr>

                            <div class="modal animated zoomIn" id="detail-completed<?= $row->invoice_id ?>">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">
                                      Detail INVOICE#<?= $row->invoice_id ?>
                                      <button class="btn btn-success"><i class="fa fa-check"></i> Order Completed!</button>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="invoice_id">INVOICE ID</label>
                                        <input type="text" name="invoice_id" value="<?= $row->invoice_id ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-8">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="<?= $row->email ?>" class="form-control" readonly>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" value="<?= $row->first_name ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" value="<?= $row->last_name ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="company">Company (optional)</label>
                                        <input type="text" name="company" value="<?= $row->company ?>" class="form-control" readonly>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" name="phone_number" value="<?= $row->phone_number ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="wa">Whatsapp</label>
                                        <input type="text" name="wa" value="<?= $row->wa ?>" class="form-control" readonly>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12" style="padding-left:15px;padding-right:15px">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" rows="5" name="address" readonly><?= $row->address ?></textarea>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" name="city" value="<?= $row->city ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="state">State</label>
                                        <input type="text" name="state" value="<?= $row->state ?>" class="form-control" readonly>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="zip">Zip</label>
                                        <input type="text" name="zip" value="<?= $row->zip ?>" class="form-control" readonly>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12" style="padding-left:15px;padding-right:15px">
                                        <label for="products">Products ID List</label>
                                        <textarea class="form-control" rows="4" name="products" readonly><?= $row->products ?></textarea>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php } }else{ ?>
                            <tr><td colspan="5" class="text-center">No Customer(s) found...</td></tr>
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