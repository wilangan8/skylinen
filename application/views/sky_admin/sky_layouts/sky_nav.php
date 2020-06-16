<div class="sidebar" data-color="grey" data-background-color="azure" data-image="<?= base_url('sky_main/assets/img/city-profile.jpg') ?>">
    <div class="logo">
        <a href="<?= base_url('sky-admin/dashboard') ?>" class="simple-text logo-normal">
            Skylinen
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item <?= $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('sky-admin/dashboard') ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item <?= $this->uri->segment(3) == 'bedlinen' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('sky-admin/products/bedlinen') ?>">
                    <i class="material-icons">king_bed</i>
                    <p>Bed Linen</p>
                </a>
            </li>
            <li class="nav-item <?= $this->uri->segment(3) == 'bedding' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('sky-admin/products/bedding') ?>">
                    <i class="material-icons">single_bed</i>
                    <p>Bedding</p>
                </a>
            </li>
            <li class="nav-item <?= $this->uri->segment(3) == 'bathroom' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('sky-admin/products/bathroom') ?>">
                    <i class="material-icons">bathtub</i>
                    <p>Bathroom</p>
                </a>
            </li>
            <li class="nav-item <?= $this->uri->segment(3) == 'kitchen-and-dining' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('sky-admin/products/kitchen-and-dining') ?>">
                    <i class="material-icons">local_dining</i>
                    <p>Kitchen & Dining</p>
                </a>
            </li>
            <li class="nav-item active-pro">
                <a class="nav-link" href="<?= base_url('sky-admin/logout') ?>">
                <i class="material-icons">exit_to_app</i>
                <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>