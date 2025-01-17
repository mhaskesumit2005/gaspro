<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>master/profile"><i class="bx bx-user me-2"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>master/setting"><i class='bx bxs-lock bx-tada me-2'></i>
                    Security</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url() ?>master/cylinder"><i
                        class='bx bxs-cylinder me-2'></i>Cylinder</a>
            </li>
        </ul>
        <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class='bx bx-plus-circle me-2'></i>Add Gas</button>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Driver</h1>
                <button type="button" class="btn-close rounded-circle bg-dark" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url()?>master/save_gas">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="gas_name" class="form-label">Gas Name</label>
                            <input class="form-control" type="text" id="gas_name" name="gas_name"
                                placeholder="Enter Name" required />
                        </div>
                        <div class="col-md-4">
                            <label for="color_code" class="form-label">Color Code</label>
                            <input class="form-control h-50" type="color" name="color_code" id="color_code"
                                placeholder="Enter Color" required />
                        </div>
                        <div class="col-md-4">
                            <label for="create_date" class="form-label">Date</label>
                            <input class="form-control" type="date" name="create_date" id="create_date"
                                placeholder="Enter Date" required />
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
<!-- gas list -->
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header text-uppercase">Gas List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SR.No</th>
                            <th>Gas Name</th>
                            <th>Color Code</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                        foreach($gas as $key=>$row)
                        {
                            ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$row['gas_name']?></td>
                            <td>
                                <div class="color_div border border-secondary rounded-circle" title="<?=$row['color_code']?>"
                                    style="background-color:<?=$row['color_code']?>"></div>
                            </td>
                            <td><?=$row['create_date']?></td>
                            <td>
                                <a href="<?=base_url()?>master/edit_gas/<?=$row['gas_id']?>"
                                    class="btn btn-primary btn-sm"><i class='bx bx-edit'></i></a>
                                <a onClick="return confirm('Are You Sure?');"
                                    href="<?=base_url()?>master/delete/<?=$row['gas_id']?>"
                                    class="btn btn-danger btn-sm"><i class='bx bxs-trash bx-tada'></i></a>
                            </td>
                        </tr>
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