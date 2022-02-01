<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Number Range</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>

            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Calculator</a></li>
                <li><a href="" class="nav-link">Series</a></li>
            </ul>
        </div>
    </nav>



    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">Number Rage Measurement</div>

                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Enter First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-md-3 col-form-label">Enter Last Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="last_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Number Range</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" value="<?php  isset($output) ? $output : ''; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="submit" class="btn btn-outline-success " value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
















    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>