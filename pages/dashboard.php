<!-- include header -->
<?php require("includes/admin_header.php"); ?>
<!-- end header -->

<!-- start modal -->
<?php require("includes/modal.php"); ?>
<!-- end modal -->

<!-- content -->
<div id="content" class="mt-5">
    <div class="container">
        <div class="d-flex justify-content-between mb-5 align-items-center">
            <h2 class="mb-3">List of Users</h2>
            <div>
                <button class="btn btn-success btn-add_user">Add User</button>
            </div>
        </div>
        <table class="table table-striped" id="user_table">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date Added</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="tbody"></tbody>
        </table>
    </div>
</div>
<!-- end content -->

<!-- include footer -->
<?php require("includes/admin_footer.php"); ?>
<!-- end footer -->