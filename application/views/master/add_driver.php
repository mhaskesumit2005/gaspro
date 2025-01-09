<div class="row">
    <div class="col-md-12 mb-3">
        <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class='bx bx-plus-circle me-2'></i>Add New Driver</button>
    </div>
</div>
<!-- Add Category Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Customer</h1>
                <button type="button" class="btn-close rounded-circle bg-dark" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <input type="hidden" id="c_date" name="register_date">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="customer_name" class="form-label">Enter Name</label>
                            <input class="form-control" type="text" id="customer_name" name="customer_name"
                                placeholder="Enter Your Name" autofocus required />
                        </div>
                        <div class="col-md-4">
                            <label for="customer_number" class="form-label">Enter Contact No</label>
                            <input class="form-control" type="number" name="customer_number" id="customer_number"
                                placeholder="Enter Contact No" required />
                        </div>
                        <div class="col-md-4">
                            <label for="customer_address" class="form-label">Enter Address</label>
                            <input class="form-control" type="text" name="customer_address" id="customer_address"
                                placeholder="Enter Your Address" required />
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