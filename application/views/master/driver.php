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
                <button type="button" class="btn-close rounded-circle bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() ?>master/save_driver" id="driverForm" novalidate>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="driver_name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="driver_name" name="driver_name" placeholder="Enter Name" required />
                            <div class="invalid-feedback">
                                Please enter the driver's name.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="driver_phone" class="form-label">Contact No</label>
                            <input class="form-control" type="number" name="driver_phone" id="driver_phone" placeholder="Enter Contact" required />
                            <div class="invalid-feedback">
                                Please enter a valid contact number.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="text" name="password" id="password" placeholder="Enter Password" required />
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
                            <th>Password</th>
                            <th>Salary</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                        foreach ($driver as $key => $row) {
                            $phoneNumber = $row['driver_phone']; // Set the dynamic phone number
                            $message = "Dear " . $row['driver_name'] . ",
Complete your profile for GasPro.
User ID : " . $row['driver_phone'] . "
Password : " . $row['password'] . "

Thanks & Regards,
GasPro";
                            $encodedMessage = urlencode($message);
                            $whatsappURL = "https://wa.me/+91$phoneNumber?text=$encodedMessage"; // Generate WhatsApp link
                        ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['driver_name'] ?></td>
                                <td><?= $row['driver_phone'] ?></td>
                                <td><?= $row['driver_address'] ?></td>
                                <td><?= $row['driver_photo'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td><?= $row['salary'] ?></td>
                                <td>
                                    <a href="<?= $whatsappURL ?>" target="_blank" class="btn btn-sm" style="background-color:rgb(23, 223, 97); color:white;"><i class='bx bxl-whatsapp'></i></a>
                                    <a href="" class="btn btn-primary btn-sm"><i class='bx bx-edit'></i></a>
                                    <a href="<?=base_url()?>master/delete_driver/<?=$row['driver_id']?>" class="btn btn-danger btn-sm"><i class='bx bxs-trash bx-tada'></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>


</script>