<!DOCTYPE html>
<html lang="en">




<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('includes/styles.php'); ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('includes/header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <?php include('includes/settings.php'); ?>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include('includes/side_menu.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Horizontal Two column</h4>
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php //echo form_open_multipart('admin/banner/create'); 
                                    ?>

                                    <form class="form-sample" method="POST" action="<?php echo site_url('admin/services/update/' . $service['id']); ?>" enctype="multipart/form-data">
                                        <p class="card-description">Service Details</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="name" value="<?php echo $service['name']; ?>" required>
                                                        <?php echo form_error('name', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="image">
                                                        <?php if ($service['image']) : ?>
                                                            <img src="<?php echo base_url('' . $service['image']); ?>" alt="Service Image" width="150">
                                                        <?php else : ?>
                                                            No Image
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Icon</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="icon" >
                                                        <?php echo form_error('icon', '<p class="text-danger">', '</p>'); ?>
                                                        <?php if ($service['icon']): ?>
                                                            <img src="<?php echo base_url('' . $service['icon']); ?>"
                                                                alt="icon Image" width="150">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Banner Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="banner_image">
                                                        <?php echo form_error('banner_image', '<p class="text-danger">', '</p>'); ?>
                                                        <?php if ($service['banner_image']): ?>
                                                            <img src="<?php echo base_url('' . $service['banner_image']); ?>"
                                                                alt="banner Image" width="150">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="status" required>
                                                            <option value="">Select Status</option>
                                                            <option value="1" <?php echo ($service['status'] == '1') ? 'selected' : ''; ?>>Active</option>
                                                            <option value="2" <?php echo ($service['status'] == '2') ? 'selected' : ''; ?>>Inactive</option>
                                                            <option value="3" <?php echo ($service['status'] == '3') ? 'selected' : ''; ?>>Other</option>
                                                        </select>
                                                        <?php echo form_error('status', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" rows="4"  id="editor" required><?php echo $service['description']; ?></>
                                                        <?php echo form_error('description', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description 1</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description_new" rows="4"
                                                            required><?php echo set_value('description_new', $service['description_new']); ?></textarea>
                                                        <?php echo form_error('description_new', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                            <input type="hidden" class="form-control" name="old_image" value="<?php echo $service['image']; ?>" >
                                            <input type="hidden" name="old_icon"
                                                    value="<?php echo $service['icon']; ?>" />
                                                <input type="hidden" name="old_banner_image"
                                                    value="<?php echo $service['banner_image']; ?>" />
                                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                                <a href="<?php echo site_url('admin/services'); ?>" class="btn btn-light">Cancel</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include('includes/footer.php'); ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include('includes/scripts.php'); ?>
    <!-- End custom js for this page-->
</body>




</html>