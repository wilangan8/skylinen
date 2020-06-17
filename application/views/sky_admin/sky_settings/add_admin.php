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
                    <form action="<?= base_url('sky-admin/settings/master-admin/add-admin') ?>" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Name</label>
                                    <input type="text" autocomplete="off" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Username</label>
                                    <input type="text" autocomplete="off" class="form-control" name="username" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Password</label>
                                    <input type="password" autocomplete="off" class="form-control" name="password" required>
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