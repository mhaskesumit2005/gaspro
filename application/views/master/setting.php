<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>master/master_profile"><i class="bx bx-user me-1"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url() ?>master/setting"><i class='bx bx-cog bx-spin'></i> Setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i> Connections</a>
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Change Password</h5>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <!-- <div class="mb-3 col-md-4">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input class="form-control" type="text" id="current_password" name="current_password" placeholder="Current Password" autocomplete="off" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="new_password" class="form-label">New Password</label>
                                <input class="form-control" type="text" name="new_password" id="new_password" placeholder="New Password" />
                            </div> -->
                            <!-- <div class="mb-3 col-md-4 form-password-toggle">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input class="form-control" type="text" name="confirm_password" id="confirm_password" placeholder="Confirm Password" />
                            </div> -->
                            <div class="mb-3 col-md-4 form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Confirm Password" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="accountActivation"
                                id="accountActivation" />
                            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>