<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Hello, world!</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Form Registrasi</h1>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                        @csrf
                        <p class="fs-5 mb-0">Profile</p>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="form-group mb-2 col-6">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" id="nama" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group mb-2 col-6">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" id="username" placeholder="Username" required>
                            </div>
                            <div class="form-group mb-2 col-6">
                                <label for="email">Email Lengkap</label>
                                <input class="form-control" type="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group mb-2 col-6">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" placeholder="Password" required>
                            </div>
                        </div>
                        <p class="mb-0 fs-5">Data Diri</p>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="form-group mb-2 col-6">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="form-group mb-2 col-6">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="form-select" required>
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-5 mt-3">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
