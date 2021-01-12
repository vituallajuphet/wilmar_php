<!-- start modal -->

<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">First Name</label>
                        <input type="text" required name="firstname" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Last Name</label>
                        <input type="text" required name="lastname" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Age</label>
                        <input type="text" required name="age" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Gender</label>
                        <select name="gender" id="gender" required class="form-control">
                            <option value="">Select Gender...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Username</label>
                        <input type="text" required name="username" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Password</label>
                        <input type="password" required name="password" class="form-control">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save User</button>
        </div>
        </form>
    </div>
  </div>
</div>


<!-- end modal -->