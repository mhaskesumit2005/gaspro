<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>master/profile"><i class="bx bx-user me-1"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url() ?>master/setting"><i class='bx bxs-lock bx-tada'></i> Security</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i> Connections</a>
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Change Password</h5>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="changePasswordForm" action="<?= base_url() ?>master/change_password" method="post" novalidate>
                        <div class="row">
                            <!-- Current Password -->
                            <div class="mb-3 col-md-4 form-password-toggle">
                                <label for="current_password" class="form-label">Current Password</label>
                                <div class="input-group">
                                    <input type="password" id="current_password" class="form-control" name="current_password"
                                        placeholder="Enter Current Password" required />
                                    <span class="input-group-text cursor-pointer toggle-password">
                                        <i class="bx bx-hide fs-4"></i>
                                    </span>
                                    <div class="invalid-feedback">Please enter your current password.</div>
                                </div>
                            </div>

                            <!-- New Password -->
                            <div class="mb-3 col-md-4 form-password-toggle">
                                <label for="new_password" class="form-label">New Password</label>
                                <div class="input-group">
                                    <input type="password" id="new_password" class="form-control" name="new_password"
                                        placeholder="Enter New Password" minlength="8" required />
                                    <span class="input-group-text cursor-pointer toggle-password">
                                        <i class="bx bx-hide fs-4"></i>
                                    </span>
                                    <div class="invalid-feedback">Your new password must be at least 8 characters long.</div>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3 col-md-4 form-password-toggle">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" id="confirm_password" class="form-control" name="confirm_password"
                                        placeholder="Confirm Your New Password" required />
                                    <span class="input-group-text cursor-pointer toggle-password">
                                        <i class="bx bx-hide fs-4"></i>
                                    </span>
                                    <div class="invalid-feedback">Passwords must match.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-2">
                            <button class="btn btn-primary" type="submit">Change Password</button>
                            <button class="btn btn-outline-secondary" type="reset"><i class="bx bx-reset"></i></button>
                        </div>
                    </form>
                </div>
                <div class="container mt-1">
                    <h6>Password Requirements:</h6>
                    <ul class="ps-4">
                        <li>Minimum 8 characters long - the more, the better.</li>
                        <li>At least one lowercase character.</li>
                        <li>At least one number, symbol, or whitespace character.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>