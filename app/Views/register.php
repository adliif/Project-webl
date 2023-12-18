<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title ?></title>
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
                        <div class="row justify-content-center" style="margin-top: 10px;">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><?=lang('Auth.register')?></h3></div>
                                    <div class="card-body">
                                        
                                        <?= view('Myth\Auth\Views\_message_block') ?>

                                        <form action="<?= url_to('register') ?>" method="post">
                                            <?= csrf_field() ?>

                                            <div class="form-floating mb-3">
                                                <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" type="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>"  />
                                                <label for="inputEmail">Email</label>
                                                <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" type="text" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" />
                                                <label for="inputName">Username</label>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" type="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" type="password" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                   

                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?=base_url('/login')?>">Have an account? Go to login</a></div>
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
                Copyright © 2023 Varilitel Agency Co., Ltd. All rights reserved
            </div>
            <div class="d-flex align-items-center p-4">
                <div class="me-4">Privacy & Policy</div>
                <div>Terms & Conditions</div>
            </div>
        </footer>
    </body>
</html>
