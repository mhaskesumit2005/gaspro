</div>

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            © GasPro
            <script>
                document.write(new Date().getFullYear());
            </script>
            , By
            <a href="#" target="_blank" class="footer-link fw-bolder">A2Z IT HUB PVT LTD</a>
        </div>
        <div>
            <!-- <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="footer-link me-4">Documentation</a> -->
            <!-- <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="footer-link me-4">Support</a> -->
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<div class="buy-now">
    <a
        href="#"
        target="_blank"
        class="btn btn-danger btn-buy-now btn-sm">Support</a>
</div>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url() ?>assets/master_assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url() ?>assets/master_assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url() ?>assets/master_assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/master_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url() ?>assets/master_assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url() ?>assets/master_assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= base_url() ?>assets/master_assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url() ?>assets/master_assets/js/dashboards-analytics.js"></script>
<script src="<?= base_url() ?>assets/master_assets/js/validation.js"></script>
<script src="<?= base_url() ?>assets/master_assets/js/drag_and_drop.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<script>
    // JavaScript for Bootstrap validation
    (function() {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation to
        const forms = document.querySelectorAll('#driverForm');

        // Loop over them and prevent submission if invalid
        Array.from(forms).forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated'); // Apply Bootstrap validation styles
            }, false);
        });
    })();
</script>
</body>

</html>