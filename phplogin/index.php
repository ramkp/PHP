<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>

</head>
<body>
<div class="jumbotron text-center">
    <h1>PHP Login Script</h1>
    <p>A simple login script using PHP, PDO and MySQL</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Login</h3>
            <form class="login-form">
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
</body>
</html>