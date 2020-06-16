<?php 
    if($this->uri->segment(3) == "bedlinen"){
        $color = "primary";
    }else if($this->uri->segment(3) == "bedding"){
        $color = "success";
    }else if($this->uri->segment(3) == "bathroom"){
        $color = "info";
    }else{
        $color = "warning";
    }
?>

<div class="content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-<?= $color ?>">
                    <h4 class="card-title"><?= $title ?></h4>
                    <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('sky-admin/products/'. $this->uri->segment(3) .'/add-product-post/'. $link .'') ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Product Id (disabled)</label>
                                    <input type="text" autocomplete="off" class="form-control" value="<?= $id ?>" name="id" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Product Name</label>
                                    <input type="text" autocomplete="off" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Preview Detail Product</label>
                                    <input type="text" autocomplete="off" class="form-control" name="mini_detail" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="padding-left:15px;padding-right:15px">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Full Detail Product</label>
                                    <textarea autocomplete="off" class="form-control" rows="5" name="full_detail" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Product Image 1/Preview</label>
                                    <input type="file" name="product_img_1" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Product Image 2</label>
                                    <input type="file" name="product_img_2" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Product Image 3</label>
                                    <input type="file" name="product_img_3" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Material Title</label>
                                    <input type="text" autocomplete="off" class="form-control" name="material_title" required>
                                </div>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Material Description</label>
                                    <textarea autocomplete="off" class="form-control" rows="5" name="material_desc" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Origin Title</label>
                                    <input type="text" autocomplete="off" class="form-control" name="origin_title" required>
                                </div>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Origin Description</label>
                                    <textarea autocomplete="off" class="form-control" rows="5" name="origin_desc" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-<?= $color ?> pull-right">Update Profile</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>