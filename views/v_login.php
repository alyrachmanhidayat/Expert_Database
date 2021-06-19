<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap 5.0 and CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\CSS\v_login_CSS.css">

    <title>v_login</title>
</head>

<body>
    <div class="row justify-content-center container-fluid col-auto">
        <form class="outerForm row g-3 form-floating" action="login.php" method="POST">
            <legend style="font-size: xx-large">Login</legend>
            <div class="form-floating col-12">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
                <label for="floatingInput">Username</label>
            </div>

            <div class="form-floating col-12">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

</body>

</html>