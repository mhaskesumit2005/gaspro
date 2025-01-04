<!-- Page Content -->
<div id="page-content-wrapper" class="w-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>
            <h5 class="ms-3">Admin Dashboard</h5>
            <div class="ms-auto d-flex align-items-center">
                <span class="me-3"><i class="fas fa-user-circle"></i> Welcome, Admin</span>
                <button class="btn btn-primary">Profile</button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid py-4">
        <!-- Quick Stats Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Admins</h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">5,678</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Reports Pending</h5>
                        <p class="card-text">24</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Issues Logged</h5>
                        <p class="card-text">15</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Placeholder -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Activity Overview</h5>
                    </div>
                    <div class="card-body">
                        <div style="height: 400px; background-color: #f7f7f7; text-align: center; line-height: 400px;">
                            <strong>Chart Placeholder</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest Data Table -->
        <div class="card">
            <div class="card-header">
                Latest Admin Actions
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Admin Name</th>
                            <th>Action</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin1</td>
                            <td>Added New User</td>
                            <td>2025-01-02 10:00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Admin2</td>
                            <td>Generated Report</td>
                            <td>2025-01-02 09:30</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Admin3</td>
                            <td>Updated Settings</td>
                            <td>2025-01-02 08:50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>