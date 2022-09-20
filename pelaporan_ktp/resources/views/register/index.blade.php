<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-dark fs-5">Register</h5>
                            <form action="/register" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label>NIK</label>
                                        <input type="text" name="nik_operator"
                                            class="form-control @error('nik_operator') is-invalid @enderror"
                                            placeholder="Masukkan NIK" required value="{{old('nik_operator')}}" />
                                        @error('nik_operator')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label>Nama</label>
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            placeholder="Masukan Nama" required value="{{old('nama')}}" />
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                <label>Jabatan</label>
                                    <input type="text" name="jabatan"
                                        class="form-control  @error('jabatan') is-invalid @enderror" rows="5"
                                        placeholder="Masukkan jabatan" required value="{{old('jabatan')}}" />
                                    @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                <label>Username</label>
                                    <input type="text" name="username"
                                        class="form-control  @error('username') is-invalid @enderror"
                                        placeholder="Masukkan username" required value="{{old('username')}}" />
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                <label>Password</label>
                                    <input type="password" name="password"
                                        class="form-control  @error('password') is-invalid @enderror"
                                        placeholder="Masukkan Password" required />
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <!--div class="col-md-12 mb-2">
                                <label>Confirm Password</label>
                                    <input type="password_confirm" name="password_confirm"
                                        class="form-control  @error('password_confirm') is-invalid @enderror"
                                        placeholder="Confirm Password" required />
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div-->
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                        type="submit">Register</button>
                                    <p><br>Have an account?
                                        <a class="link-danger" href="/login">Sign In</a>
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