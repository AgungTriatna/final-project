<!-- <!DOCTYPE html>
<html lang="en">

<head>

    <!-- Bootstrap core CSS -->
<link href="<?= BASEURL ?>/css/bootstrap.min.css" rel="stylesheet" />

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet" />

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.17/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap4.min.css">

<style>
    body {
        padding: 5% 10%;
    }
</style>

</head>

<body>
    <div style="">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-4 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Sign in</h1>
                            </div>
                            <form action="<?= BASEURL ?>/login/auth" method="post">
                                <?php if (Flasher::check()) : ?>
                                    <?php $flash = Flasher::flash() ?>
                                    <div class="alert alert-<?= $flash['tipe'] ?> alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <?= $flash['pesan'] ?>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" name="username" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" id="password" required>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit" name="login">Login</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p class="small">Lupa Password? <a href="kontak">Hubungi admin</a></p>
                                <a href="about.html">About us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mt-5 mb-3 pt-2 text-center"></h3>



</body>

</html>