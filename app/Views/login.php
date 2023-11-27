<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<style>
    body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        justify-content: center;
    }

    .myfooter {
    background-color: #0f212b;
    }

    #layoutAuthentication {
        flex: 1;
    }
</style>

<body style="background-image: url(assets/images/login.png); background-color: #060606f1; background-size: cover;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center" style="margin-top: 100px;">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4"><?=lang('Auth.loginTitle')?></h3>
                                </div>
                                <div class="card-body">

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= url_to('login') ?>" method="post">
                                        <?= csrf_field() ?>

                                        
                                        <?php if ($config->validFields === ['email']): ?>
                                            <div class="form-group mb-3">
                                                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                    name="login" placeholder="<?=lang('Auth.email')?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                    name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                                            

                                        <div class="form-group mb-3">
                                            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?=base_url('/register')?>">Need an account? Register!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <footer class="d-flex justify-content-between myfooter text-white">
        <div class="d-flex align-items-center p-4">
            2023 ReservasiHotel. All rights reserved
        </div>
        <div class="d-flex align-items-center p-4">
            <div class="me-4">Privacy & Policy</div>
            <div>Terms & Conditions</div>
        </div>
    </footer>
</body>

</html>