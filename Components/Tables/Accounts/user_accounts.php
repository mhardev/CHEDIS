<div class="main-title">
    <p class="font-weight-bold">User Accounts</p>
</div>
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAcc">
    <span class="mx-1"><i class="bi bi-plus-circle"></i></span>User Account
</button>
<div class="table-responsive">
    <table class="table table-striped table-sm" style="width:100%">
        <thead>
            <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Designation</th>
                <th>Actions</th>
                <style>   
                th{
                    text-align: center;
                }
                </style>
            </tr>
            <?php
                include('../Components/APIs/Accounts/getUserAccounts.php');
            ?>
        </thead>
        <tbody class=table-group-divider>
        </tbody>
    </table>
</div>