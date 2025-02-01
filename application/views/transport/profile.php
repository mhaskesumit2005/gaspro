<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url() ?>transport/profile"><i class="bx bx-user me-2"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>transport/setting"><i class='bx bxs-lock bx-tada me-2'></i> Security</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>transport/cylinder"><i class='bx bxs-cylinder me-2'></i> Cylinder</a>
            </li>
        </ul>
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="<?= base_url() ?>uploads/<?=$driver[0]['driver_photo']?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                    <form action="<?= base_url() ?>transport/save_profile" method="post" enctype="multipart/form-data" id="profileForm">
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload New Photo &nbsp; <i class='bx bx-upload bx-burst bx-flip-vertical'></i></span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" name="driver_photo" hidden accept="image/png, image/jpeg" required />
                            </label>
                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="business_name" class="form-label">Transport Company Name</label>
                        <input class="form-control" type="text" id="business_name" name="transport_company_name" placeholder="Transport Company Name" value="<?=$driver[0]['transport_company_name']?>" required />
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="driver_name" class="form-label">Driver Name</label>
                        <input class="form-control" type="text" id="driver_name" name="driver_name" placeholder="Driver Full Name" value="<?=$driver[0]['driver_name']?>" required />
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="phoneNumber">Contact Number</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">IN (+91)</span>
                            <input type="number" id="phoneNumber" name="contact_number" class="form-control" placeholder="Enter Contact Number" value="<?=$driver[0]['contact_number']?>" required />
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="vehicle_name" class="form-label">Vehicle Name</label>
                        <input name="vehicle_name" id="vehicle_name" class="form-control" placeholder="Enter Vehicle Name" value="<?=$driver[0]['vehicle_name']?>" required />
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="licenseNumber">License Number</label>
                        <input type="text" id="licenseNumber" name="license_number" class="form-control" placeholder="Enter License Number" value="<?=$driver[0]['license_number']?>" required />
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="vehicle_number" class="form-label">Vehicle Number</label>
                        <input class="form-control" type="text" id="vehicle_number" name="vehicle_number" placeholder="e.g. DL01AB1234" value="<?=$driver[0]['vehicle_number']?>" required />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="license_photo" class="form-label">License Photo</label>
                        <div id="licenseDropZone" class="drop-zone">
                            <span>Drag and drop license photo here, or click to upload</span>
                            <input class="form-control" type="file" id="license_photo" name="license_photo" style="display: none;" accept="image/*" required value="<?=$driver[0]['license_photo']?>" />
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="aadhaar_photo" class="form-label">Aadhaar Photo</label>
                        <div id="aadhaarDropZone" class="drop-zone">
                            <span>Drag and drop Aadhaar photo here, or click to upload</span>
                            <input class="form-control" type="file" id="aadhaar_photo" name="aadhaar_photo" style="display: none;" accept="image/*" required value="<?=$driver[0]['aadhaar_photo']?>" />
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary me-2" type="submit">Save Changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
