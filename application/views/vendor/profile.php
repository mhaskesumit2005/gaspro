<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url() ?>vendor/profile"><i class="bx bx-user me-2"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>vendor/setting"><i class='bx bxs-lock bx-tada me-2'></i> Security</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>vendor/cylinder"><i class='bx bxs-cylinder me-2'></i>Cylinder</a>
            </li>
        </ul>
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="<?= base_url() ?>assets/master_assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                    <form action="<?= base_url() ?>vendor/save_profile" method="post" enctype="multipart/form-data">
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload New Photo &nbsp; <i class='bx bx-upload bx-burst bx-flip-vertical'></i></span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" name="vendor_photo" hidden accept="image/png, image/jpeg" required />
                            </label>
                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="vendor_business_name" class="form-label">Business Name</label>
                        <input class="form-control" type="text" id="vendor_business_name" name="vendor_business_name" placeholder="Business Name" required/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="vendor_name" class="form-label">Enter Full Name</label>
                        <input class="form-control" type="text" id="vendor_name" name="vendor_name" placeholder="Your Full Name" required/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Enter Phone Number</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">IN (+91)</span>
                            <input type="number" id="phoneNumber" name="vendor_phone" class="form-control" placeholder="Phone Number" required/>
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="AdharNumber">Enter Adhar Number</label>
                        <div class="input-group input-group-merge">
                            <input type="number" id="AdharNumber" name="adhar_number" class="form-control" placeholder="Enter Adhar Number" required/>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="address" class="form-label">Enter Business Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Enter Business Address" required></textarea>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="business_logo" class="form-label">Business Logo</label>
                        <div id="logoDropZone" class="drop-zone">
                            <span>Drag and drop logo here, or click to upload</span>
                            <input class="form-control" type="file" id="business_logo" name="business_logo" style="display: none;" accept="image/*" required/>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary me-2">Change Now</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>