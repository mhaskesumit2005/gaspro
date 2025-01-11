<div class="row">
    <div class="col-md-12 mb-3">
        <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class='bx bx-plus-circle me-2'></i>Add Vendor</button>
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
                <form method="POST" action="<?= base_url() ?>master/save_vendor" id="driverForm" novalidate>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="vendor_business" class="form-label">Business Name</label>
                            <input class="form-control" type="text" id="vendor_business" name="vendor_business"
                                placeholder="Enter Business Name" required />
                            <div class="invalid-feedback">
                                Please enter the driver's name.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="vendor_number" class="form-label">Contact No</label>
                            <input class="form-control" type="number" name="vendor_number" id="vendor_number"
                                placeholder="Enter Contact" maxlength="10" pattern="\d{10}" required />
                            <div class="invalid-feedback">
                                Please enter a valid contact number.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="vendor_password" class="form-label">Password</label>
                            <input class="form-control" type="text" name="vendor_password" id="vendor_password"
                                placeholder="Enter Password" required />
                            <div class="invalid-feedback">
                                Password cannot be empty.
                            </div>
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
            <h5 class="card-header text-uppercase">Vendor's List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SR.No</th>
                            <th>Business Name</th>
                            <th>Vendor Name</th>
                            <th>Vendor Photo</th>
                            <th>Status</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                        foreach ($vendor as $key => $row)
                        {
                            ?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$row['vendor_business']?></td>
                                <td><?=$row['vendor_name']?></td>
                                <td><?=$row['vendor_photo']?></td>
                                <td><?=$row['vendor_number']?></td>
                                <td><?=$row['vendor_password']?></td>
                                <td>
                                <a href="" target="_blank" class="btn btn-sm"
                                    style="background-color:rgb(23, 223, 97); color:white;"><i
                                        class='bx bxl-whatsapp'></i></a>
                                <a href="" class="btn btn-primary btn-sm"><i class='bx bx-edit'></i></a>
                                <a href="<?=base_url('')?>master/delete_vendor/<?=$row['vendor_id']?>"
                                    class="btn btn-danger btn-sm"><i class='bx bxs-trash bx-tada'></i></a>
                            </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>


</script>