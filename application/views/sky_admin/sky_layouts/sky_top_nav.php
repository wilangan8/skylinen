<div class="main-panel">

    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;"><?= $title ?></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <div class="navbar-form"></div>
                <ul class="navbar-nav">
                    <li class="nav-item <?= $this->uri->segment(2) == 'customer' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('sky-admin/customer') ?>">
                            <i class="material-icons">people</i>
                                <p class="d-lg-none d-md-block">
                                Customer
                            </p>
                        </a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment(2) == 'settings' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('sky-admin/settings') ?>">
                            <i class="material-icons">settings</i>
                                <p class="d-lg-none d-md-block">
                                Settings
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('sky-admin/logout') ?>">
                            <i class="material-icons">exit_to_app</i>
                            <p class="d-lg-none d-md-block">
                            Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>