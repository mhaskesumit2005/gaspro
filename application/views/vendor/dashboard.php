<!-- Main Content -->
<div id="page-content-wrapper" class="w-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>
            <h5 class="ms-3">Vendor Dashboard</h5>
            <div class="ms-auto d-flex align-items-center">
                <span class="me-3"><i class="fas fa-user-circle"></i> Welcome, Admin</span>
                <button class="btn btn-primary">Profile</button>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container-fluid py-4">
        <!-- Cards for Overview -->
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Vendors</h5>
                        <p class="card-text">120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">3,450</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pending Orders</h5>
                        <p class="card-text">75</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Disputes</h5>
                        <p class="card-text">5</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table for Recent Transactions -->
        <div class="card mb-4">
            <div class="card-header">
                Latest Transactions
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vendor</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>ShopMart</td>
                            <td>$120</td>
                            <td>Completed</td>
                            <td>2025-01-02</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>TechGear</td>
                            <td>$450</td>
                            <td>Pending</td>
                            <td>2025-01-01</td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>FashionHub</td>
                            <td>$900</td>
                            <td>Failed</td>
                            <td>2025-01-01</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Product Reviews Placeholder -->
        <div class="card">
            <div class="card-header">
                Latest Product Reviews
            </div>
            <div class="card-body">
                <div style="height: 400px; background-color: #f7f7f7; text-align: center; line-height: 400px;">
                    <strong>Reviews Placeholder</strong>
                </div>
            </div>
        </div>
    </div>
</div>
</div>