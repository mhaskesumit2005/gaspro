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
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/login_assets/images/gas_favicon.png">

</head>

<body class="overflow-hidden">
    <!-- <div class="login_container vh-100"> -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 vh-100 cylinder p-0"> 
                </div>
                <div class="col-md-6 vh-100 d-flex align-items-center p-0">
                    <div class="card card-body vh-100 justify-content-center bg-light border-0 rounded-0 p-5">
                        <div class="text-center">
                            <img src="<?=base_url()?>assets/login_assets/images/gas_favicon.png" alt="" width="auto" height="120">
                        </div>
                        <h3 class="text-capitalize text-center">welcome to GasPro Login</h3>
                        <form>
                        <div class="py-3">
                                <label for="loginusername" class="form-label fw-semibold">Username</label>
                                <input type="text" class="form-control rounded-1 bg-white" name="username"
                                    id="loginusername" aria-describedby="username" required>
                                <!-- <div id="username" class="form-text">Your unique username to app</div> -->
                                <div class="invalid-feedback">
                                    Please enter your username.
                                </div>
                            </div>
                            <div class="py-3">
                                <label for="loginPassword" class="form-label fw-semibold">Password</label>
                                <input type="password" name="password" class="form-control rounded-1 bg-white"
                                    id="loginPassword" required>
                                <!-- <div id="password" class="form-text">Your Password</div> -->
                                <div class="invalid-feedback">
                                    Please enter your password.
                                </div>
                            </div>
                            <div class="py-3 submit_btn">
                            <button type="submit"
                                class="btn btn-primary rounded-1 px-4 py-3 text-center fw-semibold float-end">Secure
                                Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->

    <!-- Bootstrap 5.3v script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <!-- External js -->
    <script src="<?=base_url()?>assets/login_assets/js/login.js"></script>
</body>

</html>