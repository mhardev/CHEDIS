<!-- Add Admin Account-->

<div class="modal fade modal-md" id="addAcc" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog h-50">
        <div class="modal-content h-80">
            <div class="modal-header">
                <h5 class="modal-title">Add Admin Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="text" id="admin-fname" class="form-control" placeholder="Enter first name" aria-label="Price" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="text" id="admin-mname" class="form-control" placeholder="Enter middle name" aria-label="Price" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="text" id="admin-lname" class="form-control" placeholder="Enter last name" aria-label="Price" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="email" id="email" class="form-control" placeholder="Enter email" aria-label="Price" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="text" id="role" class="form-control" placeholder="Enter your role" aria-label="Price" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="text" id="designation" class="form-control" placeholder="Enter your designation" aria-label="Price" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="text" id="uname" class="form-control" placeholder="Enter username" aria-label="Price" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="password" id="pass" class="form-control" placeholder="Enter password" aria-label="Price" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addConfirm">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- Update Admin Account-->

<div class="modal fade modal-md" id="updateInfo" tabindex="-1" aria-labelledby="updateMdlLabel" aria-hidden="true">
    <div class="modal-dialog h-50">
        <div class="modal-content h-80">
            <div class="modal-header">
                <h5 class="modal-title">Update Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col" style="display: none;">
                            <div class="box">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="accId" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="Email" placeholder="Email" aria-label="Stock" aria-describedby="basic-addon1" required>
                                    <label for="Email">Email address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="Age" placeholder="Age" aria-label="Image" aria-describedby="basic-addon1" required>
                                    <label for="Age">Age</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="Address" placeholder="Address" id="Address"></textarea>
                                    <label for="Address">Address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">+63</span>
                                    <input type="text" class="form-control" id="Number" placeholder="9123456789" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updtAcc">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Update Admin Password-->
