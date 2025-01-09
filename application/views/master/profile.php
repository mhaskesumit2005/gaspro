<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url() ?>master/profile"><i class="bx bx-user me-2"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>master/setting"><i class='bx bxs-lock bx-tada me-2'></i> Security</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i> Connections</a>
            </li>
        </ul>
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="<?= base_url() ?>assets/master_admin_assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                    <form action=" <?= base_url() ?>master/save_profile" method="post" enctype="multipart/form-data">
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload New Photo &nbsp; <i class='bx bx-upload bx-burst bx-flip-vertical'></i></span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="business_name" class="form-label">Business Name</label>
                        <input class="form-control" type="text" id="business_name" name="business_name" placeholder="Business Name" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Your Full Name" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="text" id="email" name="email" placeholder="example@gmail.com" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">IN (+91)</span>
                            <input type="text" id="phoneNumber" name="profile_mobile" class="form-control" placeholder="Phone" />
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Your Address"></textarea>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="business_favicon" class="form-label">Business Favicon</label>
                        <div id="faviconDropZone" class="drop-zone">
                            <span>Drag and drop favicon here, or click to upload</span>
                            <input class="form-control" type="file" id="business_favicon" name="business_favicon" />
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="business_logo" class="form-label">Business Logo</label>
                        <div id="logoDropZone" class="drop-zone">
                            <span>Drag and drop logo here, or click to upload</span>
                            <input class="form-control" type="file" id="business_logo" name="business_logo" />
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