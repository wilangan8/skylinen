<div class="content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title"><?= $title ?></h4>
                    <p class="card-category">Fill in all fields</p>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('sky-admin/settings/update-admin') ?>" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Name</label>
                                    <input type="hidden" name="id" value="<?= $row->id ?>">
                                    <input type="text" autocomplete="off" class="form-control" name="name" value="<?= $row->name ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Username</label>
                                    <input type="text" autocomplete="off" class="form-control" name="username" value="<?= $row->username ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Password</label>
                                    <input type="password" autocomplete="off" class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Status Account</label>
                                    <select name="status" class="form-control" disabled>
                                        <option value="1" <?= $row->status == '1' ? 'selected' : '' ?>>Online</option>
                                        <option value="0" <?= $row->status == '0' ? 'selected' : '' ?>>Offline</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Access</label>
                                    <select name="hak" class="form-control">
                                        <option value="Y" <?= $row->hak == 'yes' ? 'selected' : '' ?>>Granted</option>
                                        <option value="N" <?= $row->hak == 'no' ? 'selected' : '' ?>>Not Granted</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>