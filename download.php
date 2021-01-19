<!doctype html>
<html lang="en">

<head>
    <?php include 'links/links.php' ?>
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Pricing example · Bootstrap v5.0</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/"> -->



    <!-- Bootstrap core CSS -->
    <link href="css/boot.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>

<body>

    <!-- <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">Company name</p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </header> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mohammed Ali</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="download.php">Downloads</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                            aria-expanded="false">Other Sections</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="about.php">About</a></li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                            <li><a class="dropdown-item" href="services.php">Booking</a></li>
                            <li><a class="dropdown-item" href="calc.php">Calculator</a></li>
                            <li><a class="dropdown-item" aria-current="page" href="index.php">Home</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <input type="submit" value="Search" class="btn btn-outline-primary my-2 my-sm-0">
                </form>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Download</h1>
            <p class="lead">Download examples, files or Source code </p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Download</h4>
                    </div>
                    <div class="card-bunstyled mt-3 mb-4">
                        <h1 class="card-title pricing-card-title">Examples <!-- <small class="text-muted">/ mo</small> --></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Click Below to download</li>
                            <li>There are examples in ZIP archive</li>
                            <li>Use examples to make your website</li>
                            <!-- <li>Help center access</li> -->
                        </ul>
                        <a href="downloads/d2.php?file=Examples of Mohammed Ali HTML and CSS" class="btn btn-outline-success">Download</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Download</h4>
                    </div>
                    <div class="card-bunstyled mt-3 mb-4">
                        <h1 class="card-title pricing-card-title">Complied CSS and JS <!-- <small class="text-muted">/ mo</small> --></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>It includes CSS and JS files</li>
                            <li>All are in ZIP archive</li>
                            <!-- <li>10 GB of storage</li> -->
                            <!-- <li>Priority email support</li> -->
                            <!-- <li>Help center access</li> -->
                        </ul>
                        <a href="downloads/d1.php?file=Bootstrap-5.0" class="btn btn-outline-success">Download</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Download</h4>
                    </div>
                    <div class="card-bunstyled mt-3 mb-4">
                        <h1 class="card-title pricing-card-title">Programs <!-- <small class="text-muted">/ mo</small> --> </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <!-- <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>10 GB of storage</li> -->
                            <li>One disc Image file of famous programs</li>
                            <li>GIFT!!!</li>
                        </ul>
                        <a href="downloads/d3.php?file=Program Files" class="btn btn-outline-success">Download</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="images/bootstrap-logo.svg" alt="" width="24" height="19">
                    <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Cool stuff</a></li>
                        <li><a class="link-secondary" href="#">Random feature</a></li>
                        <li><a class="link-secondary" href="#">Team feature</a></li>
                        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                        <li><a class="link-secondary" href="#">Another one</a></li>
                        <li><a class="link-secondary" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Resource</a></li>
                        <li><a class="link-secondary" href="#">Resource name</a></li>
                        <li><a class="link-secondary" href="#">Another resource</a></li>
                        <li><a class="link-secondary" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Team</a></li>
                        <li><a class="link-secondary" href="#">Locations</a></li>
                        <li><a class="link-secondary" href="#">Privacy</a></li>
                        <li><a class="link-secondary" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer> -->
    </main>



</body>

</html>