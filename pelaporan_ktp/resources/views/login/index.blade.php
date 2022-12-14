<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <form action="/login" method="post">
        @csrf
        <div class="container">
            <div class="row">
                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('loginError')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="col-sm-10 col-md-5 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title text-center mb-5 fw-dark fs-5">
                                <img src="https://turbo.net.id/wp-content/webp-express/webp-images/uploads/2020/12/19196952-removebg-preview.png.webp" class="rounded-circle"
                                    style="width: 150px;" alt="Avatar" /><br>
                                    SIGN IN
                                </h5>
                                <form action="loginMultiRoleSession.php" method="post">
                                    <div class="col-md-12 mb-2">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username"
                                            autofocus required>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                            type="submit">Sign
                                            in</button>
                                        <p><br>Don't have an account?
                                            <a class="link-danger" href="/register">Register</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>