<?php include_once("includes/header.php");?>
<div class="jumbotron text-center">
    <h1>PHP Login Script</h1>
    <p>A simple login script using PHP, PDO and MySQL</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Register</h3>
            <div class="alert alert-dismissible alert-danger register-error" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
            </div>
            <form class="register-form">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" required="required" id="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" required="required" id="pwd" placeholder="*****">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include_once("includes/footer.php"); ?>