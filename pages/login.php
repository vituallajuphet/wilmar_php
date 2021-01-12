<!-- include header -->
<?php require("includes/login_header.php"); ?>
<!-- end header -->

<!-- content -->
<div id="login" class="pb-5">
    <div class="container">
        <h3 class="text-center mb-4">Login Account</h3>
        <form action="#" class="login_form">
            <input id="username" placeholder="Username" required type="text" class="form-control mb-3">
            <input id="password" placeholder="Password" required type="password" class="form-control mb-3">
            <button class="btn w-100 btn-success font-weight-bold" id="btn_login">Submit</button>
        </form>
        <div id="login_alert" style="display:none;" class="alert alert-danger mt-4 text-center" role="alert">
             <span class="alert_message"></span>
        </div>
    </div>
</div>
<!-- end content -->

<!-- include footer -->
<?php require("includes/login_footer.php"); ?>
<!-- end footer -->