<!-- start modal -->

<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-label class="font-weight-bold"ledby="exampleModallabel class="font-weight-bold"" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="#" id="form_add_user">
            <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="exampleModallabel" class="font-weight-bold">Add User</h5>
            <button type="button" data-dismiss="modal" aria-label class="font-weight-bold close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">First Name</label class="font-weight-bold">
                        <input type="text" required name="firstname" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Last Name</label class="font-weight-bold">
                        <input type="text" required name="lastname" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Age</label class="font-weight-bold">
                        <input type="number" required name="age" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Gender</label class="font-weight-bold">
                        <select name="gender" id="gender" required class="form-control">
                            <option value="">Select Gender...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Username</label class="font-weight-bold">
                        <input type="text" required id="txtUsername"  name="username" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Password</label class="font-weight-bold">
                        <input id="txtPassword" type="password" required name="password" class="form-control">
                    </div>
                    
                </div>
                <div style="display:none;" class="alert alert-danger" id="alert_error_add" role="alert">
                </div>
                <div style="display:none;" class="alert alert-success" id="alert_success_add" role="alert">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-submit-add">Save User</button>
        </div>
        </form>
    </div>
  </div>
</div>


<!-- end modal -->

<!-- start modal -->

<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-label class="font-weight-bold"ledby="exampleModallabel class="font-weight-bold"" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="#" id="form_edit_user">
            <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="exampleModallabel" class="font-weight-bold">Edit User</h5>
            <button type="button" data-dismiss="modal" aria-label class="font-weight-bold Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">First Name</label class="font-weight-bold">
                        <input type="text" required name="firstname" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Last Name</label class="font-weight-bold">
                        <input type="text" required name="lastname" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Age</label class="font-weight-bold">
                        <input type="number" required name="age" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Gender</label class="font-weight-bold">
                        <select name="gender" id="gender" required class="form-control">
                            <option value="">Select Gender...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Username</label class="font-weight-bold">
                        <input type="text" required id="txtEditUsername"  name="username" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="">Password</label class="font-weight-bold">
                        <input id="txtEditPassword" type="password" required name="password" class="form-control">
                    </div>
                    
                </div>
                <div style="display:none;" class="alert alert-danger" id="alert_error_add" role="alert">
                </div>
                <div style="display:none;" class="alert alert-success" id="alert_success_add" role="alert">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-submit-edit">Update User</button>
        </div>
        </form>
    </div>
  </div>
</div>


<!-- end modal -->