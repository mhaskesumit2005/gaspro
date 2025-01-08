<!-- Main Content -->
<div id="page-content-wrapper" class="w-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>
            <h5 class="ms-3">Dashboard</h5>
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
                        <h5 class="card-title">Total Vehicles</h5>
                        <p class="card-text">56</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Active Drivers</h5>
                        <p class="card-text">24</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Routes Active</h5>
                        <p class="card-text">18</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pending Bookings</h5>
                        <p class="card-text">7</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table for Latest Bookings -->
        <div class="card mb-4">
            <div class="card-header">
                Latest Bookings
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Route</th>
                            <th>Booking Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>John Doe</td>
                            <td>New York - Boston</td>
                            <td>2025-01-01</td>
                            <td>Confirmed</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Jane Smith</td>
                            <td>Los Angeles - San Francisco</td>
                            <td>2025-01-01</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>Bob Johnson</td>
                            <td>Chicago - Detroit</td>
                            <td>2025-01-02</td>
                            <td>Cancelled</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Chart Placeholder -->
        <div class="card">
            <div class="card-header">
                Fleet Utilization
            </div>
            <div class="card-body">
                <div style="height: 400px; background-color: #f7f7f7; text-align: center; line-height: 400px;">
                    <strong>Chart Placeholder</strong>
                </div>
            </div>
        </div>
    </div>
</div>
</div>