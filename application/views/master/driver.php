<div class="row">
    <div class="col-md-12 mb-3">
        <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class='bx bx-plus-circle me-2'></i>New Driver</button>
    </div>
</div>

<!-- Add New Driver Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Driver</h1>
                <button type="button" class="btn-close rounded-circle bg-dark" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <input type="hidden" id="c_date" name="register_date">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="driver_name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="driver_name" name="driver_name"
                                placeholder="Enter Name" autofocus required />
                        </div>
                        <div class="col-md-4">
                            <label for="driver_number" class="form-label">Contact No</label>
                            <input class="form-control" type="number" name="driver_number" id="driver_number"
                                placeholder="Enter Contact" required />
                        </div>
                        <div class="col-md-4">
                            <label for="driver_password" class="form-label">Password</label>
                            <input class="form-control" type="text" name="driver_password" id="driver_password"
                                placeholder="Enter Password" required />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header text-uppercase">Driver's List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Driver Name</th>
                            <th>Mobile</th>
                            <th>Vehical</th>
                            <th>Vehical No.</th>
                            <th>Status</th>
                            <th>Profile</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>Ramesh Pawar</td>
                            <td>123456789</td>
                            <td>Mahindra PickUp</td>
                            <td>MH 12 AZ 8799</td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td><span class="badge bg-label-warning me-1">Pending</span></td>
                            <td>
                                <i class='bx bx-fullscreen me-2'></i>
                                <i class='bx bxs-bell-ring'></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>