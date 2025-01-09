<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon/a2z_logo.png" type="image/x-icon">
    <title>GasPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- External Css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login_assets/css/style.css">
    <!-- Favicon -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/login_assets/images/favicon/gas_favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login_assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login_assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/login_assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/login_assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="<?=base_url()?>assets/login_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?=base_url()?>assets/login_assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?=base_url()?>assets/login_assets/vendor/js/helpers.js"></script>

    <script src="<?=base_url()?>assets/login_assets/js/config.js"></script>
</head>

<body class="overflow-hidden">
    <div class="row">
        <div class="col-md-7 vh-100 cylinder p-0">
        </div>
        <div class="col-sm-12 col-lg-5 d-flex align-items-center p-0">
            <div class="card card-body justify-content-center bg-light border-0 rounded-0 p-5 login vh-100">
                <div class="text-center">
                    <img src="<?=base_url()?>assets/login_assets/images/gas_favicon.png" alt="favicon" width="auto"
                        height="120">
                </div>
                <h3 class="text-capitalize text-center text-dark">welcome to GasPro Login</h3>
                <form id="formAuthentication" class="mb-3 needs-validation" action="index.html" method="POST"
                    novalidate>
                    <div class="mb-4">
                        <label for="username" class="form-label fw-bold">Username/Phone</label>
                        <input type="text" class="form-control shadow-sm border-0" id="username" name="username"
                            placeholder="0123456789" maxlength="10" pattern="\d{10}"
                            title="Your Number" required autofocus />
                        <div class="invalid-feedback">
                            Please enter a valid 10-digit phone number.
                        </div>
                    </div>

                    <div class="mb-4 form-password-toggle">
                        <label class="form-label fw-bold" for="password">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control border-0 shadow-sm" name="password"
                                placeholder="Your password" aria-describedby="password" required title="Please Enter Password for Login"/>
                            <span class="input-group-text cursor-pointer border-0 shadow-sm"><i
                                    class="bx bx-hide fs-4"></i></span>
                            <div class="invalid-feedback">
                                Password is required.
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn text-white d-grid py-2 fw-semibold border-0 w-100 py-3">Secure
                            Login</button>
                    </div>
                </form>
                <div class="row footer_link">
                    <div class="col-md-12 d-flex justify-content-center">
                        <p class="fs-6 text-secondary">© GasPro
                            <script>
                            document.write(new Date().getFullYear());
                            </script>,
                            <a href="https://a2zithub.org/" target="_blank" class=" text-decoration-none fw-bold">A2Z IT
                                HUB PVT
                                LTD</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=base_url()?>assets/master_admin_assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url()?>assets/master_admin_assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url()?>assets/master_admin_assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url()?>assets/master_admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?=base_url()?>assets/master_admin_assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?=base_url()?>assets/master_admin_assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?=base_url()?>assets/master_admin_assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?=base_url()?>assets/master_admin_assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- External js -->
    <script src="<?=base_url()?>assets/login_assets/js/login.js"></script>
</body>

</html>