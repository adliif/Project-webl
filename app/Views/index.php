<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Welcome</title>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<style>
    .index {
    background-image: url(assets/images/login.png);
    background-color: rgba(42, 48, 66, 1);
    background-size: cover;
    }

    .content {
    height: 100vh; /* Set height to 100 viewport height */
    width: 60vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    }

    .box {
    background-color: gainsboro;
    border-radius: 20px;
    width: 300px;
    height: 550px;
    }

    .myfooter {
    background-color: #0f212b;
    }
</style>
<body class="index">
    <div class="content container text-center text-white">
        <div class="text-center">
            <h2>Solutions to solve your accommodation problems</h2>
            <p>Find the best hotel. choose the type, payment is easy, and you can rest comfortably
            </p><br>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?=base_url('/login')?>" type="button" class="btn btn-dark btn-lg">Explore</a>
            </div>
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